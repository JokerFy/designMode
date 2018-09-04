<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 14:35
 */

namespace Design;

class FemaleUserStrategy implements UserStrategy
{
    public function showAd(){
        echo "香奈儿";
    }
    public function showCategory(){
        echo '美妆';
    }
}