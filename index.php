<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 9:43
 */

define('ROOT_PATH', __DIR__);   //定义项目的文件根目录
include ROOT_PATH.'/Lib/Loader.php';  //引入自定义的类加载方法
spl_autoload_register('\\Lib\\Loader::autoload');   //当访问不存在的类时自动调用该方法引入类库文件
Design\Application::getInstance(__DIR__)->dispatch();


/*$config = new \Lib\Config(__DIR__.'/configs');
var_dump($config['controller']);*/

/*$db = new \Lib\Database\MySQLi();
$db->connect('127.0.0.1','root','root','test');
$db->query("show databases");
$db->close();*/

/*$user = new Lib\ORM\User(1);
$user->mobile = '13588540661';
$user->name = 'frez';
$user->regtime = time();*/

/*class Event extends \Design\EventGenerator {
    function trigger()
    {
        echo "Event<br/>\n";

        //update
//        echo "逻辑1<br/>\n";
//        echo "逻辑2<br/>\n";
//        echo "逻辑3<br/>\n";
        $this->notify();
    }

}

class Observer1 implements \Design\Observer{
    function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo "逻辑1<br />\n";
    }
}


class Observer2 implements \Design\Observer{
    function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo "逻辑2<br />\n";
    }
}
$event = new Event;
$event->addObserver(new Observer1);
$event->addObserver(new Observer2);
$event->trigger();*/

/*
$users = new \Design\AllUser();
//print_r($users);exit;
foreach ($users as $user){
    var_dump($user->id);
}*/