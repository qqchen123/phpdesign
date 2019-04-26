<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/25
 * Time: 9:17 PM
 */

namespace Imooc;


class Factory {
	static function createDatabase(){
//		$db = new Database();
		$db = Database::getInstance();
		return $db;
	}
}