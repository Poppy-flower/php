<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
   $name=$email=$website=$comment=$gender="";



   if($_SERVER["REQUEST_METHOD"]=="POST"){
      $name=test_input($_POST["name"]);
       $email=test_input($_POST["email"]);
       $website=test_input($_POST["website"]);
       $comment=test_input($_POST["comment"]);
       $gender=test_input($_POST["gender"]);

   }

function test_input($date){
   $date=trim($date);
    $date=stripslashes($date);
    $date=htmlspecialchars($date);
    return $date;

}

?>









<h2>php 表单验证输入实例</h2>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    姓名：<input type="text"  name="name"><br><br>
    电邮： <input type="text"  name="email"><br><br>
    网址：<input type="text"  name="website"><br><br>
    评论：<textarea name="comment"  cols="40" rows="5"></textarea><br><br>
    性别：<input type="radio" name="gender"  value="female">男性
    <br>
    <input type="radio"  name="gender"  value="male">女性
    <br>
    <input type="submit"  name="submit" value="提交">

</form>













<?php
   echo "<h2>您的输入：</h2>";
   echo  $name;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $website;
   echo "<br>";
   echo $comment;
   echo "<br>";
   echo $gender;

?>
</body>
</html>


