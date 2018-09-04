<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 11:36
 */
namespace Lib\Database;
use Lib\IDatabase;

class MySQLi implements IDatabase{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysqli_query($this->conn,$sql);
        return $res;
    }

    public function close($sql)
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}