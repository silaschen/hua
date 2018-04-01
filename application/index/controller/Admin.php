<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Request;
use think\Db;
/**
* admin management system
*/
class Admin extends Common
{


	public function CheckAdmin(){

			if(!session('sys_uid')){

					$this->redirect('admin/login');
					exit();

			}

	}
	#logout#
	public function logout(){
		session('sys_uid',null);
		$this->redirect('admin/login');
		exit();
	}

	#登录#
	public function login(){
		if(Request::instance()->isGet()){
			if(session('sys_uid')){
				$this->redirect('Admin/index');exit();
			}

			return $this->fetch('login',['title'=>'登录']);
		}else{
			$user = input('user');
			$pwd = input('pwd');
			if(!$user || !$pwd) exit(json_encode(['code'=>0]));
			$info = Db::name('admin')
			->where(['user'=>$user,'pwd'=>md5($pwd)])->find();
			if(!$info) exit(json_encode(['code'=>0,'msg'=>'用户不存在']));
			if($info['status']){
					session('sys_uid',$info['id']);
					exit(json_encode(['code'=>1,'msg'=>'successfully']));
			}else{
				exit(json_encode(['code'=>0]));
			}
		}
	}

	public function userlist(){
			$this->CheckAdmin();
			$p = input('p')?input('p'):1;
			$word = input('word');
			$map = array();
			if($word) $map['title'] = array('like','%'.$word.'%');
			$list = Db::name('user')->where($map)->paginate(10);//分页
			$page = $list->render();
			$this->assign('page',$page);// 赋值分页输出
			//分页跳转的时候保证查询条件
			$this->assign('list',$list);
			return $this->fetch('userlist',['title'=>'用户列表','eq'=>'用户管理']);
	}


	public function deluser(){
		$this->CheckAdmin();
		$id = input('id');
		$sql = "delete from user where id=$id";
		Db::execute($sql);
		exit(json_encode(['code'=>1]));


	}


public function addvege(){
	$this->CheckAdmin();
	$id = Request::instance()->param('id');
	if($id){
		$info = Db::name('flower')->where(['id'=>$id])->find();
		$this->assign('info',$info);
	}

	return $this->fetch('addvege',['eq'=>'蔬菜管理','title'=>'add vage']);
}





	public function addflower(){
		$this->CheckAdmin();
		if(Request::instance()->isGet()){
			$id = Request::instance()->param('id');
			if($id){
				$info = Db::name('flower')->where(['id'=>$id])->find();
				$this->assign('info',$info);
			}
			return $this->fetch('addflower',['title'=>'addflower','eq'=>'花卉管理']);
		}else{
			$data = Request::instance()->post();
			if($data['id'] >0){
				Db::name('flower')->update($data,['id'=>$data['id']]);
			}else{
				$data['addtime'] =time();
				Db::name('flower')->insert($data);
			}

			exit(json_encode(['code'=>1,'msg'=>'成功']));

		}
	}


	#addblog#
	public function addblog(){
		$this->CheckAdmin();
		if(Request::instance()->isGet()){
			$id = Request::instance()->param('id');
			$info = Db::name('blog')->where(['id'=>$id])->find();
			return $this->fetch('addblog',['title'=>'addblog','eq'=>2,'info'=>$info]);
		}else{
			$data = Request::instance()->post();
			if($data['id'] >0){
				Db::name('blog')->update($data,['id'=>$data['id']]);
			}else{
				$data['addtime'] =time();
				$data['author'] = 'admin';
				Db::name('blog')->insert($data);
			}
			exit(json_encode(['code'=>1,'msg'=>'成功']));

		}
	}


	//博客列表
		public function bloglist(){
			$this->CheckAdmin();
		if(\think\Request::instance()->isGet()){
			$this->title = ' 博客列表';
			$p = input('p')?input('p'):1;
			$word = input('word');
			$map = array();
			if($word) $map['title'] = array('like','%'.$word.'%');
			$list = Db::name('blog')->paginate(10);
			$page = $list->render();
			$this->assign('page',$page);// 赋值分页输出
			//分页跳转的时候保证查询条件
			$this->assign('list',$list);
			return $this->fetch('bloglist',['title'=>'博客列表','eq'=>2]);
		}else{
			$id = input('id');
			Db::name('blog')->where(['id'=>$id])->delete();
			exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
		}
	}



		public function queslist(){
		$this->CheckAdmin();
		if(\think\Request::instance()->isGet()){
			$this->title = 'ques列表';
			$p = input('p')?input('p'):1;
			$word = input('word');
			$map = array();
			if($word) $map['q.title'] = array('like','%'.$word.'%');
			$list = Db::name('questions')->alias('q')
			->join('user u','q.uid=u.id','left')
			->field("u.nickname,q.*")
			->paginate(10);
			$page = $list->render();
			$this->assign('page',$page);// 赋值分页输出
			//分页跳转的时候保证查询条件
			$this->assign('list',$list);
			return $this->fetch('queslist',['title'=>'ques列表','eq'=>2]);
		}else{
			$id = input('id');
			Db::name('blog')->where(['id'=>$id])->delete();
			exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
		}
	}



public function replyques(){

	$this->CheckAdmin();
	$qid = input('id');
	$ans = input('answer');
	// var_dump([$qid,$ans]);
	$upsql = sprintf("update questions set answer='%s',restime=%d WHERE id=%d",$ans,time(),$qid);
	$re = Db::execute($upsql);
	if($re){
		exit(json_encode(['code'=>1,'msg'=>'successfully']));
	}else{
		exit(json_encode(['code'=>0,'msg'=>'falure']));
	}
}


//博客列表
	public function orderlist(){
		$this->CheckAdmin();
	if(\think\Request::instance()->isGet()){
		$this->title = 'order列表';
		$p = input('p')?input('p'):1;
		$word = input('word');
		$map = array();
		if($word) $map['title'] = array('like','%'.$word.'%');
		$list = Db::name('orders')
		->alias('o')
		->join('flower f','o.flowerid=f.id','left')
		->join('user u','u.id=o.uid','left')
		->field("o.id,o.orderid,o.addtime,u.nickname,f.name,o.fee,o.num,f.cover,o.status")
		->order('o.id desc')
		->paginate(10);
		$page = $list->render();
		$this->assign('page',$page);// 赋值分页输出
		//分页跳转的时候保证查询条件
		$this->assign('list',$list);
		return $this->fetch('orderlist',['title'=>'order列表','eq'=>2]);
	}else{
		$id = input('id');
		Db::name('orders')->where(['id'=>$id])->delete();
		exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
	}
}

public function index(){
	return $this->fetch('index');
}


	public function order2list(){
			$this->CheckAdmin();
	if(\think\Request::instance()->isGet()){
		$this->title = ' 博客列表';
		$p = input('p')?input('p'):1;
		$word = input('word');
		$map = array();
		if($word) $map['title'] = array('like','%'.$word.'%');
		$list = Db::name('orders2')
		->alias('o')
		->join('flower f','o.flowerid=f.id','left')
		->join('user u','u.id=o.uid','left')
		->field("o.id,o.orderid,o.addtime,o.time,u.nickname,f.name,o.fee,o.num,f.cover,o.status")
		->order('o.id desc')
		->paginate(10);
		$page = $list->render();
		$this->assign('page',$page);// 赋值分页输出
		//分页跳转的时候保证查询条件
		$this->assign('list',$list);
		return $this->fetch('order2list',['title'=>'order列表','eq'=>2]);
	}else{
		$id = input('id');
		Db::name('orders2')->where(['id'=>$id])->delete();
		exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
	}
}



	public function FlowerStatUpdate(){
		$this->CheckAdmin();
		$data = \think\Request::instance()->post();
		$id = intval($data['oid']);


		unset($data['oid']);
		$data['text'] = urlencode($data['text']);
		$sql = sprintf("update orders2 SET stat='%s' WHERE id=%d",json_encode($data),$id);
		$ret = Db::execute($sql);
		if($ret){
				exit(json_encode(['code'=>1,'msg'=>'success']));

		}else{
			exit(json_encode(['code'=>-10,'msg'=>'error']));
		}

	}



	public function makepost(){

		$oid = input('oid');
		$name=input('name');
		$eid = input('eid');
		$express = array(
					'name'=>urlencode($name),
					'id'=>$eid
		);
		$upsql = sprintf("update orders set expressinfo='%s',status=3 where id=%d",json_encode($express),$oid);
		if(Db::execute($upsql)){
			exit(json_encode(['code'=>1,'msg'=>'post successfully']));
		}else{
			exit(json_encode(['code'=>-1,'msg'=>'unknown error occur.']));
		}
	}


	//列表
		public function flowerlist(){
		$this->CheckAdmin();
		if(\think\Request::instance()->isGet()){
			$this->title = ' flower列表';
			$p = input('p')?input('p'):1;
			$word = input('word');
			$map = array();
			if($word) $map['name'] = array('like','%'.$word.'%');
			$list = Db::name('flower')->where(['type'=>1])->paginate(10);
			$page = $list->render();
			$this->assign('page',$page);// 赋值分页输出
			//分页跳转的时候保证查询条件
			$this->assign('list',$list);
			return $this->fetch('flowerlist',['title'=>'花卉管理','eq'=>'花卉管理']);
		}else{
			$id = input('id');
			Db::name('flower')->where(['id'=>$id])->delete();
			exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
		}
	}



	public function vegelist(){
	$this->CheckAdmin();
	if(\think\Request::instance()->isGet()){
		$this->title = ' vege列表';
		$p = input('p')?input('p'):1;
		$word = input('word');
		$map = array();
		if($word) $map['name'] = array('like','%'.$word.'%');
		$list = Db::name('flower')->where(array('type'=>2))->paginate(10);
		$page = $list->render();
		$this->assign('page',$page);// 赋值分页输出
		//分页跳转的时候保证查询条件
		$this->assign('list',$list);
		return $this->fetch('vegelist',['title'=>'蔬菜管理','eq'=>2]);
	}else{
		$id = input('id');
		Db::name('flower')->where(['id'=>$id])->delete();
		exit(json_encode(['ret'=>1,'msg'=>'删除成功']));
	}
}
}

 ?>
