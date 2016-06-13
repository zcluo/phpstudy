<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 17:27
 */

include("Serial.php");

$a = new A;
$s = serialize($a);
// 把变量$s保存起来以便文件page2.php能够读到
file_put_contents('store', $s);

