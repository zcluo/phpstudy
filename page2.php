<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 17:28
 */

// page2.php:

// 要正确了解序列化，必须包含下面一个文件
include("Serial.php");

$s = file_get_contents('store');
$a = unserialize($s);

// 现在可以使用对象$a里面的函数 show_one()
$a->show_one();