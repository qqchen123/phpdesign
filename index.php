<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 7:56 AM
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/Imooc/Loader.php';
spl_autoload_register('\\Imooc\\Loader::autoload');
/*zhan*/
//$stack = new SplStack();
//$stack->push('s1');
//$stack->push('s2');
//
//echo $stack->pop();
//echo '<br/>';
//echo $stack->pop();
/*duilie*/
//$queue = new SplQueue();
//$queue->enqueue('q1');
//$queue->enqueue('q2');
//echo $queue->dequeue();
//echo '<br/>';
//echo $queue->dequeue();

//$db = new \Imooc\Database();
//$dbres = $db->where('id=1')->order('id')->limit();

//$obj = new \Imooc\Object();
//$obj->title='hello bbj';
//echo $obj->title;
//$obj->test('hello',123);

//\Imooc\Object::test('hl',11);
//echo $obj;
//echo $obj('inv');


//$db = \Imooc\Factory::createDatabase();
$db = \Imooc\Database::getInstance();










