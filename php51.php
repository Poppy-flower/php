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
 * Date: 2017/1/31
 * Time: 下午8:32
 */
$age=array('bill'=>'35','steve'=>'37','peter'=>'43');
ksort($age);


foreach($age  as $x=>$x_value){
   echo "key=".$x.",value=".$x_value."!<br/>";
}





?>
</body>
</html>
