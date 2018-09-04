<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 11:33
 */

namespace Lib;


class Config implements \ArrayAccess
{
   protected $path;
   protected $configs = array();

   function __construct($path)
   {
       $this->path = $path;
   }

   function offsetSet($offset, $value)
   {
       // TODO: Implement offsetSet() method.
   }

   function offsetGet($key)
   {
       // TODO: Implement offsetGet() method.
       if(empty($this->configs[$key]))
       {
            $file_path = $this->path.'/'.$key.'.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
       }
       return $this->configs[$key];
   }

   function offsetExists($offset)
   {
       // TODO: Implement offsetExists() method.
   }

   function offsetUnset($offset)
   {
       // TODO: Implement offsetUnset() method.
   }
}