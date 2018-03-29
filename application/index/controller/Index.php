<?php
namespace app\index\controller;
use think\Db;
use think;
use think\Request;
use app\index\controller\Common;

class Index extends Common
{
	/**
	*主页
	*主要是去数据库请求各个模块数据
	*Db::query()  数据库查询sql执行
	*/
    public function index(){
    	//导航推荐,及在线影视推荐

		return $this->fetch('index');
    }


    public function store(){

    	return $this->fetch('shop');
    }
	

    //注册,exit,josn_encode($param)
	public function register(){
			$data = \think\Request::instance()->post();//获取前端传过来的的值，数组
			$data['password'] = md5($data['password']);
			$findsql = "SELECT * from user where nickname='{$data['nickname']}'";
			//Db::query($sql)  执行sql语句
			$status = Db::query($findsql);
			if($status){
				exit(json_encode(array('code'=>-10,'msg'=>'此昵称已被注册')));
			}

			//插入sql
			$addsql=sprintf("insert into user VALUES ('','%s','%s','%s','%s','%s','%s')",$data['nickname'],$data['email'],$data['phone'],$data['password'],$data['sex'],time());
			//执行插入sql语句
			$db = Db::execute($addsql);
			if($db){
				exit(json_encode(['code'=>1]));
			}else{
				exit(json_encode(['code'=>0]));
			}
		
	}


	//登录函数，session
	public function login(){
		$email = \think\Request::instance()->post('email');
		$password =\think\Request::instance()->post('password');
		$pwd = md5($password);
		$user = Db::query("select * from user where email='$email' AND password='$pwd'");
		if($user){
			$this->SetUserLogin($user);
			exit(json_encode(['code'=>1,'nickname'=>$user[0]['nickname']]));
		}else{

			exit(json_encode(['code'=>0]));
		}
	}
	

	//设置状态
	public function SetUserLogin($user){
	
		\think\Session::set('login_uid',$user[0]['id']);
		\think\Session::set('login_nick',$user[0]['nickname']);
	//	\redisObj\redisTool::getRedis()->lpush('loginuser',$user['id']);
	}



	/**
	 *购票详情页
	*/
	public function selectshow(){
		//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

		$id = input('id');
		$film = Db::query("select * from video where id='$id'");
		$sql = "select b.id, b.time,b.cinemaid,b.btime,b.etime,c.name,c.address from  tickets b  JOIN cinemas c ON b.cinemaid=c.id where b.videoid='$id'";
		$res = Db::query($sql);
		foreach($res as $k=>$v){
			$res[$k]['time']= json_decode($v['time']);
		}
		$this->UpdateVideoView($id);
		$this->assign('moviedates',$res);
		$this->assign('film',$film);
		$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
		return $this->fetch('selectshow');
	}
	
	//下单页
	public function payment(){
		//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

		if(Request::instance()->isGet()){
			$vid = input('vid');
			$cid = input('cid');
			$tid = input('tid');
			$ticket = Db::name('tickets')->where(['id'=>$tid])->find();
			$time = input('time');
			$film = Db::name('video')->where(['id'=>$vid])->find();
			$cinema = Db::name('cinemas')->where(['id'=>$cid])->find();
			$this->assign(['cid'=>$cid,'film'=>$film,'time'=>$time,'cinema'=>$cinema,'ticket'=>$ticket]);
			$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
			return $this->fetch('payment');
		}else{
			$data = Request::instance()->post();
			var_dump($data);
		

		}

	}




	protected function LoginStstus(){
		if(\think\Session::get('login_uid') === null){
			return false;
		}
		return true;

	}



	//下单
	public function orderfilm(){

		if(!$this->LoginStstus()){
			exit(json_encode(['code'=>0,'msg'=>'未登录，请先登录再购票']));
		}
		$data = $_POST;
		$data['uid'] = \think\Session::get('login_uid');
		$data['money'] = Db::query("select price from video where id='{$data['videoid']}'")[0]['price'];
		$data['addtime'] = time();
		$data['status'] = 2;
		$data['payinfo'] = json_encode(['banknum'=>$data['banknum'],'bankname'=>$data['bankname']]);
		$data['orderid'] = md5($data['uid'].$data['money'].$data['videoid'].time());
		unset($data['bankname']);
		unset($data['banknum']);
		Db::name('film_order')->insert($data);
		exit(json_encode(['code'=>1,'msg'=>'下单成功']));
	}


	//blog
	public function blog(){
		//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可


		$blog = Db::name('blog')->order('id desc')->paginate(6);
		$page = $blog->render();
		$hot = Db::query("select id,title from blog order by id asc limit 10");
		$this->assign('webserver',\think\Config::get('WEBSERVER')."/");
		return $this->fetch('blog',['blog'=>$blog,'page'=>$page,'hot'=>$hot]);
	}

	//movies
	public function movies(){
		return $this->fetch('movies');
	}
	

	//读博客
	public function readblog(){
		//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

		$id = input('id');
		$blog = Db::name('blog')->where(array('id'=>$id))->find();
		$this->assign('blog',$blog);
		$comment = Db::query("select a.content,a.addtime,b.nickname from blog_comment a left join user b ON a.uid=b.id where a.blogid='{$id}'");
		$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
		$this->assign('comments',$comment);

		//最新博客
		$latest = Db::query("select id,title from blog order by addtime desc limit 15");
		$this->assign('latest',$latest);
		return $this->fetch('single');
	}	



	//评论
	public function comment(){
		if(Request::instance()->isPost()){
			$data = Request::instance()->post();
			$sql = sprintf("insert into blog_comment (blogid,uid,content,addtime) VALUES (%d,%d,'%s',%d)",$data['blogid'],\think\Session::get('login_uid'),$data['comment'],time());
			$flag = Db::execute($sql);
			exit(json_encode(['code'=>1]));

		}
	}


	public function myticket(){
		//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

		$sql = sprintf("select o.id,o.orderid,o.addtime,o.status,v.title,c.name,o.time,o.money,t.btime,t.etime from film_order o join video v ON o.videoid=v.id join cinemas c ON o.cinemaid=c.id join tickets t ON o.ticketid=t.id where o.uid=%d",\think\Session::get('login_uid'));
		$ticket = Db::query($sql);
		return $this->fetch('myticket',['ticket'=>$ticket]);
	} 


	public function UpdateVideoView($id){
			$old = Db::name('video')->where(['id'=>$id])->find();
			$old = $old['view'];
			$sql = sprintf("update video set view='%d' where id='%d'",$old+1,$id);
			Db::execute($sql);
	}
	      

    /**
     * video list
     */
    public function videolist(){
    	//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

    	$p = input('p') ? input('p'):1;
	  	$map['cate'] = 2;
		$model = Db::name('video');
		$list = $model
		->where($map)->paginate(6,false,['query' => request()->param()])->toArray();
		// 获取分页显示
		$page = $model
        ->where($map)->paginate(6,false,['query' => request()->param()])->render();
		// 模板变量赋值
		$this->assign('list', $list);
		$this->assign('page', $page);
		return $this->fetch('videolist',['title'=>"videolist"]);
    }

    //公告阅读
    public function readnotice(){
    	//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可

    	$id = input('id');
    	$notice = Db::query("select * from notice where id=$id")[0];
    	$this->assign('notice',$notice);
    	return $this->fetch('readnotice');
    }


    public function playonline(){
    	//导航推荐,及在线影视推荐
    	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可
    	
		$id = input('id');
		$video = Db::name('video')->where(['id'=>$id])->find();
			$this->assign('webserver',\Think\Config::get('WEBSERVER')."/"); $this->assign('video',$video);
		$this->UpdateVideoView($id);
		$recommend = Db::query("select id,title from video where cate=2 and id not in ($id) order by view desc limit 8");
		return $this->fetch('playonline',['recommend'=>$recommend]);
	}


    public function sendm(){
        $body = "please click the link below to finish check"."\n"."http://www.liondog.cn";
        var_dump($this->sendmail('chensiwei1@outlook.com','CHECK account',$body));
    }


    //导航栏在线否票，在线影院
    private  function navdata(){
    	$navbuy = Db::query("select * from video where cate=1 order by id desc limit 4");
    	$this->assign('navbuy',$navbuy);
    	$navonline = Db::query("select * from video where cate=2 order by id desc limit 4");
    	$this->assign('navonline',$navonline);
    }

/*
******************************************************************************************************************************************************************************************************************************************************************************************/
	public function like(){
		//strtotime() y-m-d 时间格式转化成时间戳
		$blogid = input('blogid');
		$daystart = strtotime(date("Y-m-d",time()));
		$dayover = $daystart+24*3600;

		$existsql=sprintf("select * from likes where userid=%d and blogid=%d and addtime between %d and %d" ,\think\Session::get('login_uid'),$blogid,$daystart,$dayover);
		$existstatus=Db::query($existsql);
		if($existstatus){
			exit(json_encode(array('code'=>-1)));
		}
		$sql = sprintf("INSERT INTO likes(blogid,userid,addtime) VALUES (%d,%d,%d)",$blogid,\think\Session::get('login_uid'),time());
		$status=Db::execute($sql);
		if ($status) {
			$sq = "select count(*) as total from likes where blogid=$blogid";
			$huizhi2=Db::query($sq);

			exit(json_encode(array('code'=>1,'likecount'=>$huizhi2[0]['total'])));

		}else{
			exit(json_encode(['code'=>0]));
		}

	}


	//登出
	public function logout(){

		\think\Session::set('login_uid',null);
		\think\Session::set('login_nick',null);
		exit(json_encode(array('code'=>1)));


	}


}
