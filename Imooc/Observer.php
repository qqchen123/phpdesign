<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 1:02 PM
 */

namespace Imooc;


interface Observer {
	function update($event_info =NULL);

}