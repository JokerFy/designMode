<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 14:36
 */

namespace Design;


class MaleUserStrategy implements UserStrategy
{
    public function showAd(){
        echo "iphoneX";
        echo "<br>";
    }
    public function showCategory(){
        echo '电子产品';
        echo "<br>";
    }
}