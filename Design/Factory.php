<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 11:04
 */
namespace Design;

use Lib\Database;
use Lib\ORM\User;

class Factory
{
    static $proxy = null;

    public static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }

/*    public static function getDatabase($id = 'master'){
        $db = new \Lib\Database\MySQLi();
        $db->connect('127.0.0.1','root','root','test');
        Register::set('msyqli',$db);
        return $db;
    }*/
    static function getDatabase($id = 'proxy')
    {
        if ($id == 'proxy')
        {
            if (!self::$proxy)
            {
                self::$proxy = new \IMooc\Database\Proxy;
            }
            return self::$proxy;
        }

        $key = 'database_'.$id;
        if ($id == 'slave')
        {
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)];
        }
        else
        {
            $db_conf = Application::getInstance()->config['database'][$id];
        }
        $db = Register::get($key);
        if (!$db) {
            $db = new Database\MySQLi();
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
            Register::set($key, $db);
        }
        return $db;
    }

    public static function getUser($id){
        $key = 'user_'.$id;
        $user = Register::get($key);
        if(!$user){
            $user = new User($id);
            Register::set($key,$user);
        }
        return $user;
    }
}