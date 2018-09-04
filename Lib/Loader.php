<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 9:49
 */
namespace Lib;

class Loader{
    public static function autoload($class){
        require ROOT_PATH.'/'.str_replace('\\','/',$class).'.php';
    }

}