<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 11:39
 */

$config = array(
    'home'=>array(
        'decorator'=>array(
            'designMode\Decorate\Template',
            'designMode\Decorate\Json',
        ),
    ),
    'default'=>'hello world'
);
return $config;