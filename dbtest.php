<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome to nginx!</title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "Luo008051", "mysql");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br/>";

$mysqli = new mysqli("127.0.0.1", "root", "Luo008051", "mysql", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "<br/>";
/*if(mysqli_query($mysqli,"CREATE DATABASE my_db"))
{
    echo "Database created!"."<br/>";
}
else{
    echo "Error creating database: ".mysqli_error($mysqli);
}*/
mysqli_select_db($mysqli,"my_db");
/*$sql = "CREATE TABLE Persons
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysqli_query($mysqli,$sql);*/
$sql = "INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')";
$mysqli->query($sql);
$sql = "INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')";
$mysqli->query($sql);
mysqli_close($mysqli);
?>
</body>
</html>