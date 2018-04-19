<?php
namespace app\index\Data;
use think\Db;
/**
* 数据提供,数据逻辑
*/
class Fetch
{

	public static function indexdata(){
	  //查询4个花卉，4个蔬菜，并随机排序，用于主页面展示
      $flower = self::fetchFlower(1,4);
      $vege = self::fetchFlower(2,4);
      $data = array_merge($flower,$vege);
      //latest 6 news blog
      $blog = Db::query("select id,title,description,cover FROM blog order by id desc limit 6");
      return array($data,$blog);
	}


	private static function fetchFlower($type=false,$count=6){
		$sql = "select * from flower";
		if($type){
			$sql .= sprintf(" where type=%d",$type);
		}
		$sql .= sprintf(" order by id desc limit %d",$count);

		return Db::query($sql);
	}


	public static function finduserByName($name){

		return Db::query("SELECT * from user where nickname='{$name}'")[0];

	}

	/**
	*注册
	*/
	public static function register($data){
			//插入sql
			$addsql=sprintf("insert into user(nickname,phone,email,password,addtime) VALUES ('%s','%s','%s','%s','%s')",$data['nickname'],$data['phone'],$data['email'],$data['password'],time());
			//执行插入sql语句
			return Db::execute($addsql);
	}


	//login
	public static function login($account,$pwd){

		   $sql = "select * from user where password='{$pwd}' AND (email='{$account}' OR phone='{$account}')";
  			return  Db::query($sql);
	}


	public static function makeorder($data){

		 $price = Db::query(sprintf("select price from flower where id=%d",$data['flowerid']))[0]['price'];
	      //total fee
	      $fee1 = $data['num']*$price;
	      $data['status'] = 2;//no pay status
	      $data['orderid'] = md5(time().$data['uid'].$data['fee']);
	      if(intval($data['type']) === 1){
	        $data['fee'] = $fee1;
	        unset($data['type']);
	        $ret = Db::name('orders')->insert($data);

	      }else if(intval($data['type']) === 2){
	        $data['fee'] = 20*$data['time']+$fee1;
	        $data['expire'] = strtotime("+".$data['time']." month");
	        unset($data['type']);
	        $ret = Db::name('orders2')->insert($data);
	      }

	      return array($ret,$data['fee']);

	}





	




}