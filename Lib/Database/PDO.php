<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 11:36
 */
namespace Lib\Database;
use Lib\IDatabase;

class PDO implements IDatabase{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return $this->conn->query($sql);

    }

    public function close($sql)
    {
        // TODO: Implement close() method.
       unset($this->conn);
    }
}