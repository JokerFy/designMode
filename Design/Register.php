<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 11:22
 */

namespace Design;


class Register
{
    protected static $objects;

    /**
     * 将对象映射到注册树上
     * @param $alias
     * @param $object
     */
    public static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($name)
    {
        return self::$objects[$name];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}