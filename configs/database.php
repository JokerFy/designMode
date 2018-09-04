<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/24
 * Time: 11:58
 */
$config = array(
    'master'=>array(
        'type'=>'MySQL',
        'host'=>'127.0.0.1',
        'user'=>'root',
        'password'=>'root',
        'dbname'=>'test'
    ),
    'slave'=>array(
        'slave1'=>array(
            'type'=>'MySQL',
            'host'=>'127.0.0.1',
            'user'=>'root',
            'password'=>'root',
            'dbname'=>'test2'
        )
    )
);