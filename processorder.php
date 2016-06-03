<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts
</h1>
<h2>Order Results</h2>
<p>Order processed.</p>
<?php
$param =  file_get_contents("php://input");
//echo $_POST["tireqty"];
echo $param;
parse_str($param,$ar);
$str = serialize($ar);
echo "<br />";
foreach($ar as $k=>$v)
{
    echo $k."=>".$v."<br/>";
}
$x=5;
$y=7;
function myTest(){
    global $x,$y;
    $y = $x+$y;
}
myTest();
echo $y.'<br/>';
function myTest1(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
myTest1();
echo $y.'<br/>';
$txt1="Learn PHP";
$txt2="W3Scool.com.cn";
$cars=array("Volvo","BMW","SAAB");
echo $txt1;
echo "<br/>";
echo "Study PHP at $txt2";
echo "<br/>";
echo "My car is a {$cars[0]}";
echo "<br/>";
echo $_SERVER['HTTP_USER_AGENT'];
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo '正在使用 Internet Explorer。<br />';
}
echo "<br/>";
echo strlen("Hello world!");
echo "<br/>";
echo strpos("Hello world!","world");
echo "<br/>";
define("GREETING","Welcome to W3School.com.cn!");
echo GREETING;




?>
</body>
</html>