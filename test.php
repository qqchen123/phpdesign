<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 7:38 AM
 */
//require 'test1.php';
//require 'test2.php';
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test1::test();
Test2::test();

/*类自动引入*/
//function __autoload($class){
//	require __DIR__.'/'.$class.'.php';
//}
function autoload1($class){
	require __DIR__.'/'.$class.'.php';
}

function autoload2($class){
	require __DIR__.'/'.$class.'.php';
}