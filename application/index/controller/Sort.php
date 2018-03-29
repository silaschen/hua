<?php 
/**
* php 双向链表
* 
*/
class doublelinklist 
{
	private static $data = array();
	function __construct(argument)
	{
		# code...
	}

	public static function addFirst($item){
		return array_unshift(self::$data, $item)
	}

	public static function removeFirst(){
		return array_shift(self::$data);
	}

	public static function push($item){
		return array_push(self::$data,$item);
	}

	public static function pop(){
		return array_pop(self::$data);
	}


}

var_dump(doublelinklist::addFirst(1));
