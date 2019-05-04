<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 1:02 PM
 */

namespace Imooc;

abstract class EventGenorator
{
    private $observers = [];
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
