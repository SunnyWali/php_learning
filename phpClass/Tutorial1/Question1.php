<?php
function sum($num1,$num2)
{
    return $num1+$num2;
}
function diff($num1,$num2)
{
    return $num1-$num2;
}
function mul($num1,$num2)
{
    return $num1*$num2;
}
function div($num1,$num2)
{
    return $num1/$num2;
}
echo"The sum of the given numbers are: ".sum(10,20);
echo "\n";
echo"The difference of the given numbers are: ".diff(10,20);
echo "\n";
echo"The multiplication of the given numbers are: ".mul(10,20);
echo "\n";
echo"The division of the given numbers are: ".div(10,20);
?>