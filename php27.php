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
 * Date: 2017/1/12
 * Time: 下午4:16
 */
$x=array('a'=>'red','b'=>'green');
$y=array('c'=>'blue','d'=>'yellow');
$z=$x+$y;
var_dump($z);
echo  "<br>";


var_dump($x==$y);
echo  "<br>";


var_dump($x===$y);
echo "<br>";


var_dump($x!=$y);
echo  "<br>";


var_dump($x<>$y);
echo  "<br>";


var_dump($x!==$y);
echo "<br>"



?>
</body>
</html>


