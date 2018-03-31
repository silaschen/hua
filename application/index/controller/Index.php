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
    	//查询4个花卉，4个蔬菜，并随机排序，用于主页面展示
      $flower = Db::query("select * from flower  where type=1 order by id desc limit 4");
      $vege = Db::query("select * from flower where type=2 order by id desc limit 4");
      $data = array_merge($flower,$vege);
      shuffle($data);
      $this->assign('flower',$data);
		  return $this->fetch('index');
    }


    /**
     * 商店首页，默认展示花卉分类下的，多肉植物
     *可根据左侧筛选条件筛选
     */
    public function store(){
      //select flower cae=1 and type=1
      $type = input('type');
      $cate = input('cate');
      $name = input('name');
      $map = array();
      $map['cate'] = $cate?$cate:1;
      $map['type'] = $type ? $type:1;
      if($name) $map['name'] = array('like',"%".$name."%");
      $flower = Db::name('flower')->where($map)->order('id desc')->paginate(9);
      $this->assign('flower',$flower);
    	return $this->fetch('shop');
    }

    //about page
    public function about(){
        return $this->fetch('about');
    }


  //注册,exit,josn_encode($param)
	public function register(){
    if(\think\Request::instance()->isGet()){
      return $this->fetch('register');
    }else{
			$data = \think\Request::instance()->post();//获取前端传过来的的值，数组
			$data['password'] = md5($data['password']);
			$findsql = "SELECT * from user where nickname='{$data['nickname']}'";
			//Db::query($sql)  执行sql语句
			$status = Db::query($findsql);
			if($status){
				exit(json_encode(array('code'=>-10,'msg'=>'此昵称已被注册')));
			}
			//插入sql
			$addsql=sprintf("insert into user(nickname,phone,email,password,addtime) VALUES ('%s','%s','%s','%s','%s')",$data['nickname'],$data['phone'],$data['email'],$data['password'],time());
			//执行插入sql语句
      // var_dump($addsql);exit;
			$db = Db::execute($addsql);
			if($db){
				exit(json_encode(['code'=>1,'msg'=>'注册成功，请登录']));
			}else{
				exit(json_encode(['code'=>0]));
			}
    }
	}


	//登录函数，session
	public function login(){

      $account = \think\Request::instance()->post('account');
  		$password =\think\Request::instance()->post('password');
  		$pwd = md5($password);
  		$user = Db::query("select * from user where password='$pwd' OR email='$account' OR phone='$account'");
  		if($user){
  			$this->SetUserLogin($user);
  			exit(json_encode(['code'=>1,'nickname'=>$user[0]['nickname'],'msg'=>'success']));
  		}else{
  			exit(json_encode(['code'=>0,'msg'=>'error']));
  		}

	}


	//设置状态
	public function SetUserLogin($user){

		\think\Session::set('login_uid',$user[0]['id']);
		\think\Session::set('login_nick',$user[0]['nickname']);
	//	\redisObj\redisTool::getRedis()->lpush('loginuser',$user['id']);
	}



	/**
	 *buy
	*/
	public function buy(){
		$id = input('id');
		$item = Db::query("select * from flower where id=$id");
		$this->assign('item',$item[0]);
		$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
		return $this->fetch('buy');
	}




	//下单页
	public function makeorder(){

			$data = Request::instance()->post();
			$data['addtime'] = time();
      $data['uid'] = \think\Session::get('login_uid');
      $price = Db::query(sprintf("select price from flower where id=%d",$data['flowerid']))[0]['price'];
      //total fee
      $data['fee'] = $data['num']*$price;
      $data['status'] = 1;//no pay status
      $data['orderid'] = md5(time().$data['uid'].$data['fee']);
      $ret = Db::name('orders')->insert($data);
      if($ret){
        exit(json_encode(['code'=>1,'msg'=>'order successfully','fee'=>$data['fee']]));
      }else{
        exit(josn_encode(['code'=>-10]));
      }
	}


  //my order
  public function myorder(){
    //join flower to select my order list
    $page = input('p')?input('p'):1;
    $maxcount = Db::query(sprintf("select count(*) as total from orders where uid=%d",\think\Session::get('login_uid')))[0]['total'];
    $maxpage = ceil($maxcount/\think\Config::get('PAGE_SIZE'));
    $page = $page>$maxpage?$maxpage:$page;
    $sql = sprintf("SELECT o.id,o.orderid,o.status,o.expressinfo,o.recieve,f.name,f.price,
      o.fee,o.addtime,f.cover FROM orders as o LEFT JOIN flower as f ON o.flowerid=f.id
    WHERE o.uid=%d order by id desc limit %d,%d",\think\Session::get('login_uid'),($page-1)*(\think\Config::get('PAGE_SIZE')),\think\Config::get('PAGE_SIZE'));
    // var_dump($sql);exit;
    $order = Db::query($sql);
    //pass the list to view
    $this->assign('orders',$order);
    $this->assign(array('page'=>$page,'maxpage'=>$maxpage));
    return $this->fetch('myorder',$order);
  }


//unset need to connect to internet
  public function pay(){
    $id = input('id');
    $this->assign('id',$id);
    return $this->fetch('pay');
  }



  ///set the login session api
	protected function LoginStstus(){
		if(\think\Session::get('login_uid') === null){
			return false;
		}
		return true;

	}



	// //读博客
	// public function readblog(){
	// 	//导航推荐,及在线影视推荐
  //   	$this->navdata();//每个函数都要用，所以封装一个新的函数，复用即可
  //
	// 	$id = input('id');
	// 	$blog = Db::name('blog')->where(array('id'=>$id))->find();
	// 	$this->assign('blog',$blog);
	// 	$comment = Db::query("select a.content,a.addtime,b.nickname from blog_comment a left join user b ON a.uid=b.id where a.blogid='{$id}'");
	// 	$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
	// 	$this->assign('comments',$comment);
  //
	// 	//最新博客
	// 	$latest = Db::query("select id,title from blog order by addtime desc limit 15");
	// 	$this->assign('latest',$latest);
	// 	return $this->fetch('single');
	// }


    public function sendm(){
        $body = "please click the link below to finish check"."\n"."http://www.liondog.cn";
        var_dump($this->sendmail('chensiwei1@outlook.com','CHECK account',$body));
    }



	//登出
	public function logout(){

		\think\Session::set('login_uid',null);
		\think\Session::set('login_nick',null);
		exit(json_encode(array('code'=>1)));


	}


}
