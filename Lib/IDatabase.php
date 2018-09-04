<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 10:51
 */
namespace Lib;

interface IDatabase{
    public function connect($host,$user,$passwd,$dbname);
    public function query($sql);
    public function close($sql);
}

class Database{

    protected static $db;

    public static function getInstance(){
        if(empty(self::$db)){
            self::$db = new self();
        }
        return self::$db;
    }

    private function __construct()
    {

    }

    public function where($where){
        return $this;
    }

    public function order($order){
        return $this;
    }

    public function limit($limit){
        return $this;
    }
}