<?php
function fibonacciSeries($num)
{
    $a=0;
    $b=1;
    echo $a." ";
    echo $b." ";
    for($i=2;$i<$num;$i++)
    {
        $c=$a+$b;
        echo $c." ";
        $a=$b;
        $b=$c;
    }
}
$num=readline("enter the number of fibonacci series to be printed");
fibonacciSeries($num);
?>