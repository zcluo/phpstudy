<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/12
 * Time: 14:16
 */


include("SimpleClass.php");
include("Test.php");
include("Child.php");
include("ExtendClass.php");
include("ClassName.php");
include("BaseClass.php");
include("Base.php");
include("PropertyTest.php");



use emmaluo\SimpleClass;
use emmaluo\Test;
use emmaluo\Child;
use emmaluo\ExtendClass;
use emmaluo\ClassName;
use emmaluo\BaseClass;
use emmaluo\SubClass;
use emmaluo\OtherSubClass;
use emmaluo\TheWorldIsNotEnough;
use emmaluo\MyHelloWorld;
use emmaluo\Talker;
use emmaluo\Alias_Talker;
use emmaluo\MyClass1;
use emmaluo\MyClass2;
use emmaluo\PropertyTest;



$instance = new \emmaluo\SimpleClass();
$assigned = $instance;
$ref = & $instance;
$instance->var = '$assigned will have this value';

$instance = null;
var_dump($instance);
var_dump($ref);
var_dump($assigned);

$obj1 = new Test();
$obj2 = new $obj1;

var_dump($obj1 !== $obj2);
echo "<br/>";

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);
echo "<br/>";

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
echo "<br/>";

$extended = new ExtendClass();
$extended->displayVar();
echo "<br/>";

echo ClassName::class;

function __autoload($name){
    echo "Want to load $name";
    echo "<br/>";
    throw new Exception("Unable to load $name");

}
/*function my_autoloader($class){
    echo "Want to load $class in my_autoloader";
    echo "<br/>";
    throw new Exception("Unable to load $class in my_autoloader");
}
spl_autoload_register('my_autoloader');
try{
    $obj = new NonLoadableClass();
}
catch (Exception $e){
    echo $e->getMessage();
    echo "<br/>";

}*/

$baseClass = new BaseClass();
$subClass = new SubClass();
$otherSubClass = new OtherSubClass();

$o = new MyHelloWorld();
$o->sayHello();
echo "<br/>";

$o = new TheWorldIsNotEnough();
$o->sayHello();
echo "<br/>";
$talker = new Talker();
$talker->bigTalk();
$talker->smallTalk();

$aliasedTalk = new Alias_Talker();
$aliasedTalk->talk();
$aliasedTalk->smallTalk();
$aliasedTalk->bigTalk();

echo "<pre>\n";
$propTest = new PropertyTest();
$propTest->a = 1;
echo $propTest->a . "\n\n";
var_dump(isset($propTest->a));
unset($propTest->a);
var_dump(isset($propTest->a));
echo "\n\n";

echo $propTest->declared . "\n\n";

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $propTest->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $propTest->hidden . "\n";

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');

