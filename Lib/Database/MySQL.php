<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 11:36
 */
namespace Lib\Database;

use Lib\IDatabase;

class MySQL implements IDatabase{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    public function close($sql)
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}