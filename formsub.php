<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color:#FF0000;}
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $param = file_get_contents("php://input");

    parse_str($param, $ar);

    if (empty($ar["name"])) {
        $nameErr = "姓名是必填的";

    } else {
        $name = test_input($ar["name"]);
        // 检查姓名是否包含字母和空白字符
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "只允许字母和空格";
        }
    }
    if(empty($ar["email"])){
        $emailErr = "电邮是必填的";

    }
    else {
        $email = test_input($ar["email"]);
        // 检查电子邮件地址语法是否有效
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "无效的 email 格式";
        }
    }
    if(empty($ar["website"])){
        $website = "";
    }
    else {
        $website = test_input($ar["website"]);
        // 检查 URL 地址语法是否有效（正则表达式也允许 URL 中的斜杠）
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "无效的 URL";
        }
    }
    if(empty($ar["comment"])){
        $comment = "";

    }
    else{
        $comment = test_input($ar["comment"]);
    }
    if(empty($ar["gender"])){
        $genderErr = "性别是必选的";
    }
    else{
        $gender = test_input($ar["gender"]);
    }
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP 验证实例</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    姓名：<input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>
    电邮：<input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    网址：<input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    评论：<textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    性别：
    <input type="radio" name="gender" value="female">女性
    <input type="radio" name="gender" value="male">男性
    <span class="error">*<?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>

<?php
echo "<h2>您的输入：</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

date_default_timezone_set("Asia/Shanghai");
echo "今天是 ".date("Y/m/d h:i:sa l")."<br/>";
?>



</body>
</html>