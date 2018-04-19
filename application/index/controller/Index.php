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
      list($data,$blog) = \app\index\Data\Fetch::indexdata();
      $this->assign('flower',$data);
      $this->assign('news',$blog);
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
      if($type == 2 && $cate == 1){
        $cate=21;
      }else{
        $cate = $map['cate'];
      }
      if($name) $map['name'] = array('like',"%".$name."%");
      $flower = Db::name('flower')->where($map)->order('id desc')->paginate(9);
      $this->assign('flower',$flower);
      $this->assign(['type'=>$map['type'],'cate'=>$cate]);
    	return $this->fetch('shop');
    }

    //about page
    public function about(){
        return $this->fetch('about');
    }




       //搜索
    public function search(){

        $key=input('keytext');
        $data = Db::query(sprintf("select * from flower where name like '%%%s%%' and type=1",$key));
        if(empty($data)) exit(json_encode(['code'=>-1]));
        exit(json_encode(['code'=>1,'list'=>$data]));



    }

  //注册,exit,josn_encode($param)
	public function register(){
    if(\think\Request::instance()->isGet()){
      return $this->fetch('register');
    }else{
			$data = \think\Request::instance()->post();//获取前端传过来的的值，数组
      //字符格式验证
      $pattern = "/^[A-Za-z]+(\w{3,})$/";
      if(!preg_match($pattern, $data['nickname'])){
        exit(json_encode(['code'=>-11,'msg'=>'用户名格式错误']));
      }
      if(!preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $data['email'])){
        exit(json_encode(['code'=>-12,'msg'=>'邮箱格式错误，想干嘛呢你！！！']));
      }

			$data['password'] = md5($data['password']);
      $status = \app\index\Data\Fetch::finduserByName($data['nickname']);
			if($status){
				exit(json_encode(array('code'=>-10,'msg'=>'此昵称已被注册')));
			}
      $db = \app\index\Data\Fetch::register($data);
			
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
      $user = \app\index\Data\Fetch::login($account,$pwd);
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
	}



	/**
	 *buy
	*/
	public function buy(){
		$id = input('id');
    $type = input('type');
		$item = Db::query("select * from flower where id=$id");
		$this->assign('item',$item[0]);
    $this->assign('type',$type);
		$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
		return $this->fetch('buy');
	}




	//下单页
	public function makeorder(){

			$data = Request::instance()->post();
			$data['addtime'] = time();

      $data['uid'] = \think\Session::get('login_uid');
      if(!$data['uid']) exit(json_encode(['code'=>-8,'msg'=>'you need to login']));


      list($ret,$fee) = \app\index\Data\Fetch::makeorder($data);

      if($ret){
        exit(json_encode(['code'=>1,'msg'=>'order successfully','fee'=>$fee]));
      }else{
        exit(json_encode(['code'=>-10]));
      }
	}


  //my order
  public function myorder(){
    //join flower to select my order list
    $page = input('p')?input('p'):1;
    $maxcount = Db::query(sprintf("select count(*) as total from orders where uid=%d",\think\Session::get('login_uid')))[0]['total'];
    $maxpage = ceil($maxcount/\think\Config::get('PAGE_SIZE'));
    $page = $page>$maxpage?($maxpage==0?1:$maxcount):$page;
    $sql = sprintf("SELECT o.id,o.orderid,o.status,o.expressinfo,o.recieve,f.name,f.price,
      o.fee,o.addtime,f.cover FROM orders as o LEFT JOIN flower as f ON o.flowerid=f.id
    WHERE o.uid=%d order by id desc limit %d,%d",\think\Session::get('login_uid'),($page-1)*(\think\Config::get('PAGE_SIZE')),\think\Config::get('PAGE_SIZE'));
    // var_dump($sql);exit;
    $order = Db::query($sql);
    if(!empty($order)){

      foreach ($order as $key => $value) {

          $order[$key]['expressinfo'] = json_decode($value['expressinfo'],true);
          $order[$key]['expressinfo']['name'] = urldecode($order[$key]['expressinfo']['name']);

      }
    }
    //pass the list to view
    $this->assign('orders',$order);
    $this->assign(array('page'=>$page,'maxpage'=>$maxpage));
    // var_dump($orders);
    return $this->fetch('myorder',$order);
  }

  //my order
  public function myorder2(){
    //join flower to select my order list
    $page = input('p')?input('p'):1;
    $maxcount = Db::query(sprintf("select count(*) as total from orders2 where uid=%d",\think\Session::get('login_uid')))[0]['total'];
    $maxpage = ceil($maxcount/\think\Config::get('PAGE_SIZE'));
      $page = $page>$maxpage?($maxpage==0?1:$maxcount):$page;
    $sql = sprintf("SELECT o.id,o.orderid,o.status,f.name,o.expire,
      o.fee,o.addtime,o.time,f.cover FROM orders2 as o LEFT JOIN flower as f ON o.flowerid=f.id
    WHERE o.uid=%d order by id desc limit %d,%d",\think\Session::get('login_uid'),($page-1)*(\think\Config::get('PAGE_SIZE')),\think\Config::get('PAGE_SIZE'));
    // var_dump($sql);exit;
    $order = Db::query($sql);
    //pass the list to view
    $this->assign('orders',$order);
    $this->assign(array('page'=>$page,'maxpage'=>$maxpage));
    return $this->fetch('myorder2',$order);
  }

  public function flowerstat(){
    $id = input('id');
    $detail = Db::query('select * from orders2 where id=$id')[0];
    $albums = json_decode($detail['album'],true);
    return $this->fetch('flowerstat',['stat'=>$detail]);
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



	 //读博客
	public function readblog(){
		$id = input('id');
		$blog = Db::name('blog')->where(array('id'=>$id))->find();
		$this->assign('blog',$blog);
		$this->assign('webserver',\Think\Config::get('WEBSERVER')."/");
		//最新博客
		$latest = Db::query("select id,title from blog order by addtime desc limit 15");
		$this->assign('latest',$latest);
		return $this->fetch('single');
	}


  //News
  public function news(){
    $all = Db::name('blog')->order('id desc')->paginate(5);
    $this->assign('all',$all);
    //suggest products
    $hot = Db::query("select * from flower order by id desc limit 5");
    $this->assign('hot',$hot);
    return $this->fetch('blog');


  }


	//登出
	public function logout(){

		\think\Session::set('login_uid',null);
		\think\Session::set('login_nick',null);
		exit(json_encode(array('code'=>1)));

	}


  public function ask(){
    $data = \think\Request::instance()->post();
    $data['addtime'] = time();
    $data['uid'] = \think\Session::get('login_uid');
    if(!$data['uid']) exit(json_encode(['code'=>0]));
    Db::name('questions')->insert($data);
    exit(json_encode(['code'=>1]));
  }

  public function myask(){
    $question = Db::query(sprintf("SELECT * from questions WHERE uid=%d",\think\Session::get('login_uid')));
    return $this->fetch('myask',['ques'=>$question]);
  }

  public function stat(){
    $id = input('id');
    $detail = Db::query(sprintf("select stat,id,expire from orders2 where id=%d",$id))[0];
    $info = json_decode($detail['stat'],true);
    $expire = date("Y-m-d",$detail['expire']);
    if(empty($info)) $this->assign('nostat',1);
    $info['text'] = urldecode($info['text']);
    $this->assign('info',$info);
    $this->assign('expire',$expire);
    return $this->fetch('stat');
  }



  public function recieve(){
    $id = input('id');
    $sql = Db::execute("update orders set status=4 where id=$id");
    if($sql){
      exit(json_encode(['code'=>1,'msg'=>'done!']));
    }
  }


  public function ordermore(){
    $id  = input('id');
    $time = input('time');
    $expire = $time*30*24*60*60;

    $data = Db::query("select * from orders2 where id=$id")[0];
      $fee = $time*20+$data['fee'];
    $sql = sprintf("update orders2 set expire=%d,fee=%d where id=%d",$expire+$data['expire'],$fee,$id);

    Db::execute($sql);
    exit(json_encode(['code'=>1,'msg'=>'successfully','fee'=>$time*20]));


  }

}
