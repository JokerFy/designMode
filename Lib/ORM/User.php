<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 15:43
 */
namespace Lib\ORM;

class User
{
    public $db;
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    function __construct($id)
    {
        $db = new \Lib\Database\MySQLi();
        $this->db = $db;
        $db->connect('127.0.0.1','root','root','test');
        $res = $db->query("select * from user limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->query("update user set name = '{$this->name}',
          mobile = '{$this->mobile}',regtime = '{$this->regtime}' WHERE 
          id = {$this->id} limit 1");
    }
}