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
 * Time: 下午8:03
 */
$t=date('H');


if($t<10){
    echo  "have a good morning!";
}else if($t<20){
    echo  "have a good day!";

}else{
      echo  "have a good night!";
}
?>

</body>
</html>
