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
 * Date: 2017/1/20
 * Time: 下午1:56
 */
 $cars=array('saab','volvo','bmw');
 sort($cars);

 $clength=count($cars);
 for($x=0;$x<$clength;$x++){
    echo $cars[$x]."<br/>";

 }

?>

</body>
</html>
