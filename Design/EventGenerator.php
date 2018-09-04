<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 17:37
 */

namespace Design;


abstract class EventGenerator
{
    protected $observers = array();
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}