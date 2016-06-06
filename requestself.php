<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if(isset($_REQUEST['fname'])){
    $name = $_REQUEST['fname'];
    echo $name;
}
?>

</body>
</html>