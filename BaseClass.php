<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 9:23
 */

namespace emmaluo;


class BaseClass {
	function __construct() {
		print "In BaseClass constructor";
		print "<br/>";
	}

}
class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();
		print "In SubClass constructor";
		print "<br/>";
	}
}
class OtherSubClass extends BaseClass {
	
}