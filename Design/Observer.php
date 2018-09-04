<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 17:38
 */

namespace Design;


interface Observer
{
    function update($event_info = null);
}