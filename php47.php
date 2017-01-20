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
 * Time: 下午2:00
 */
$numbers=array(3,5,1,22,11);
sort($numbers);



$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
   echo $numbers[$x];
   echo "<br/>";
}

?>
</body>
</html>
