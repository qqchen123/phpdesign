<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 7:56 AM
 */
define('BASEDIR', __DIR__);
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
//$db = \Imooc\Database::getInstance();
//class Page{
//	protected $strategy;
//	function index(){
//		echo 'Ad:';
//		$this->strategy->showAd();
//		echo '<br/>';
//		echo 'Category:';
//		$this->strategy->showCategory();
//		echo '<br/>';
//	}
//	function setStrategy($strategy){
//		$this->strategy = $strategy;
//	}
//}
//$page = new Page;
//if(isset($_GET['female'])){
//	$strategy = new \Imooc\FemalStrategy();
//}else{
//	$strategy = new \Imooc\MaleStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();

//$user = new Imooc\User(1);
//$user->username='qqqqq';

//class Page{
//	public function index()
//	{
////		$user = new \Imooc\User(1);
//		$user = \Imooc\Factory::getUser(1);
//		$user->password='0000000';
//
//		$this->test();
//	}
//
//	public function test()
//	{
//		$user = \Imooc\Factory::getUser(1);
//		$user->username='apple2200000';
//
//		echo $user->username;
//	}
//}
//$page = new Page();
//$page->index();

//
//class Event extends \Imooc\EventGenorator {
//	function trigger(){
//		echo "event<br />\n";
//		//update
//		$this->notify();
//	}
//}
//class Observer1 implements \Imooc\Observer {
//	function update($event_info = NULL)
//	{
//		echo 'lj1<br />';
//	}
//}
//class Observer2 implements \Imooc\Observer {
//	function update($event_info = NULL)
//	{
//		echo 'lj2<br />';
//	}
//}
//$event = new Event();
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//$event->trigger();

//
//$prototype = new \Imooc\Canvas();
//$prototype->init();
//
//
//
//$canvas = clone $prototype;
//$canvas->rect(3,6,4,8);
//$canvas->draw();
//
//echo '------<br />';
//$canvas2 = clone $prototype;
//$canvas2->rect(3,6,4,8);
//$canvas2->draw();

$canvas = new \Imooc\Canvas();
$canvas->init();
$canvas->addDecorator(new \Imooc\ColorDrawDecorator('green'));
$canvas->addDecorator(new \Imooc\FontSizeDrawDecorator('25px'));
$canvas->rect(3, 6, 5, 12);
$canvas->draw();
