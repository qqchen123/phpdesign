<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 8:27 AM
 */

namespace Imooc;


class Database {
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