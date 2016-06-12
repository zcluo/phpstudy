<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/8
 * Time: 9:03
 */
if($_FILES["file"]["error"]>0)
{
    echo "Error: ".$_FILES["file"]["error"]."<br/>";
}
else{
    echo "Upload: ".$_FILES["file"]["name"]."<br/>";
    echo "Type: ".$_FILES["file"]["type"]."<br/>";
    echo "Size: ".($_FILES["file"]["size"]/1024)." Kb <br/>";
    echo "Stored in: ".$_FILES["file"]["tmp_name"]."<br/>";
    if(!file_exists("welcome.txt"))
    {
        die("File not found");
    }
    else
    {
        $file=fopen("welcome.txt","r");
    }
}



