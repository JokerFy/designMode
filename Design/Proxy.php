<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 11:20
 */

namespace Design;


class Proxy implements IUserProxy
{
    public function setUsername($id,$name)
    {
        // TODO: Implement setUsername() method.
        $db = Factory::getDatabase('master');
        $db->query("update user set name = $name where id = $id limit 1");

    }

    public function getUsername($id)
    {
        // TODO: Implement getUsername() method.
        $db = Factory::getDatabase('slave');
        $db->query("select name from user where id = $id limit 1");
    }
}