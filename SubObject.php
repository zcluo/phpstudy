<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 16:42
 */

namespace emmaluo;


class SubObject
{
	static $instances = 0;
	public $instance;

	public function __construct() {
		$this->instance = ++self::$instances;
	}

	public function __clone() {
		$this->instance = ++self::$instances;
	}
}

class MyCloneable
{
	public $object1;
	public $object2;

	function __clone()
	{

		// 强制复制一份this->object， 否则仍然指向同一个对象
		$this->object1 = clone $this->object1;
		//$this->object2 = clone $this->object2;
	}
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);
