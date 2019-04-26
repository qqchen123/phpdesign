<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 7:57 AM
 */
namespace Imooc;

class Object
{
//    public static function test()
//    {
//    	echo 'object test';
//    	echo '<br/>';
//    }
	protected $array =[];

//	public function __set($name, $value)
//	{
//		$this->array[$name] = $value;
//	}
//	public function __get($name)
//	{
//		var_dump(__METHOD__);
//		return $this->array[$name];
//	}

//	public function __call($name, $arguments)
//	{
//		var_dump($name,$arguments);
//		return 'magic fun';
//	}

//	public static function __callStatic($name, $arguments)
//	{
//		var_dump($name,$arguments);
//		return 'call static func';
//	}

//	public function __toString()
//	{
//		return __CLASS__;
//	}

	public function __invoke($param)
	{
		var_dump($param);
		return 'invoke';
	}
}
