<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 14:43
 */

namespace emmaluo;


class PropertyTest {

	private $data = array();
	public $declared = 1;
	private $hidden = 2;

	public function __set( $name, $value ) {
		// TODO: Implement __set() method.
		echo "Setting '$name' to '$value'\n";
		$this->data[$name] = $value;
	}

	public function __get($name){
		echo "Getting '$name'\n";
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}

		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE);
		return null;
	}

	public function __isset( $name ) {
		// TODO: Implement __isset() method.
		echo "Is '$name' set?\n";
		return isset($this->data[$name]);
	}

	public function __unset( $name ) {
		// TODO: Implement __unset() method.
		echo "Unsetting '$name'\n";
		unset($this->data[$name]);
	}

	public function getHidden()
	{
		return $this->hidden;
	}

}

class MethodTest
{
	public function __call($name, $arguments)
	{
		// 注意: $name 的值区分大小写
		echo "Calling object method '$name' "
		     . implode(', ', $arguments). "\n";
	}

	/**  PHP 5.3.0之后版本  */
	public static function __callStatic($name, $arguments)
	{
		// 注意: $name 的值区分大小写
		echo "Calling static method '$name' "
		     . implode(', ', $arguments). "\n";
	}
}