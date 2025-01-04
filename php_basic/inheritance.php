<?php
 class Hello{
    public $a=10;
    public $b=20;
 }

 class Child extends Hello{
    function sum()
    {
    $sum=$this->a+$this->b;
    echo $sum;
    }
 }

 $obj=new Child();
 $obj->sum();
?>