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
 * Time: 下午2:04
 */
class Car{
    var $color;
    function Car($color='green'){
      $this->color=$color;
    }
    function what_color(){
      return $this->color;
    }

}


function print_vars($obj){
    foreach(get_object_vars($obj)  as $prop=>$val){
      echo  "\t$prop=$val\n";
    }
}

$herbie=new Car('white');

echo  "\therbie:Properties\n";
print_vars($herbie);




?>
</body>
</html>

