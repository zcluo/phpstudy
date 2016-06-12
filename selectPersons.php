<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/8
 * Time: 14:58
 */

$mysqli = new mysqli("localhost", "root", "Luo008051", "my_db");
if (mysqli_connect_errno()) {
    die("Unabel to connect!") . mysqli_connect_errno();
}
$sql = "select * from persons";
$result = $mysqli->query($sql);

if ($result) {
    echo "<table border='1'>
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>
</thead>
<tbody>
";

    while ($row = $result->fetch_row()) {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "</tr>";

    }

    echo "</tbody>";
    echo "</table>";
    $result->close();
}
$mysqli->close();