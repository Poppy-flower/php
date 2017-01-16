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
 * Date: 2017/1/15
 * Time: 下午9:16
 */

$age=array('peter'=>'35','mary'=>24,'dam'=>'19');
foreach($age as $x=>$x_value){
  echo 'key is '.$x.',value is '.$x_value.'!<br/>';
}

?>

</body>
</html>
