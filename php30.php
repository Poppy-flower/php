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
 * Time: 下午8:05
 */

$favcolor='red';

switch($favcolor){
case 'red':
      echo  "your favcolor is red!";
      break;
case  "green":
      echo "your favcolor  is green!";
      break;
case  "white":
      echo "your favcolor is white!";
      break;
default:
      echo "your favcolor is neither red,green or white!";


}


?>

</body>
</html>
