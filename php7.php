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
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/1/11
 * Time: 下午4:05
 */
$x=5;
function  myText(){
$y=10;
echo  "在函数内声明的局部变量：</br>";
echo  "x的值是：";
echo $x;
echo "</br>";
echo "y的值是：";
echo $y;

}


myText();

echo  "</br>";
echo "函数外声明的全局变量：</br>";
echo "x的值是：";
echo $x;
echo "</br>";
echo "y的值是：";
echo $y;
?>
</body>
</html>


