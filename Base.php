<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/13
 * Time: 11:10
 */

namespace emmaluo;


class Base {

	public function sayHello(){
		echo "Hello ";
	}
}

trait SayWorld {
	public function sayHello(){
		parent::sayHello();
		echo "World!";
	}
}

class MyHelloWorld extends Base {
	use SayWorld;

}

trait HelloWorld {
	public function sayHello(){
		echo "Hello World!";
	}
}
class TheWorldIsNotEnough{
	use HelloWorld;
	public function sayHello(){
		echo "Hello Universe!";
	}
}

trait A {
	public function smallTalk(){
		echo 'a';
	}
	public function bigTalk(){
		echo 'A';
	}
}
trait B {
	public function smallTalk(){
		echo 'b';
	}
	public function bigTalk(){
		echo 'B';
	}
}
class Talker{
	use A,B{
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
	}
}

class Alias_Talker {
	use A,B {
		B::smallTalk insteadof A;
		A::bigTalk insteadof B;
		B::bigTalk as talk;
	}
}

class MyClass1 {
	use HelloWorld {sayHello as protected;}
}
class MyClass2 {
	use HelloWorld {sayHello as private myPrivateHello;}
}