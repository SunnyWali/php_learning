<?php
 class Hello{
    $a=10;
    $b=20;
 }

 class Child extends Hello{
    function sum()
    {
    $sum=$a+$b;
    echo $sum;
    }
 }

 $obj=new Child();
 $obj.sum();
?>