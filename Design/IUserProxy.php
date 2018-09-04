<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 11:23
 */

namespace Design;


interface IUserProxy
{
    public function setUsername($id,$name);
    public function getUsername($id);
}