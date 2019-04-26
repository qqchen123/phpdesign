<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 8:27 AM
 */

namespace Imooc;


class Database {

	private $db;
	private function __construct()
	{
	}
	static function getInstance(){
		if (self::$db){
			return self::$db;
		}else{
			self::$db = new self();
			return self::$db;
		}
	}

	function where($where){
		return $this;
	}
	function order($order){
		return $this;
	}
	function limit($limit){
		return $this;
	}
}