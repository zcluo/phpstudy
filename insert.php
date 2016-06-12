<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/8
 * Time: 14:45
 */
$param =  file_get_contents("php://input");
//echo $_POST["tireqty"];
echo $param;
parse_str($param,$ar);
//$str = serialize($ar);
echo "<br />";
foreach($ar as $k=>$v)
{
    echo $k."=>".$v."<br/>";
}
$mysqli = new mysqli("localhost", "root", "Luo008051", "my_db") ;
if(mysqli_connect_errno()){
    die("Unabel to connect!").mysqli_connect_errno();
}
$sql = "INSERT INTO PERSONS (FirstName,LastName,Age) VALUES ('$ar[firstname]','$ar[lastname]','$ar[age]')";
$mysqli->query($sql);
echo "1 record inserted"."</br/>";
$mysqli->close();
