<?php
function findGCD($num1,$num2)
{
    if($num2==0)
    {
        return $num1;
    }
    else
    {
        return findGCD($num2,$num1%$num2);
    }
}

echo "".findGCD(0,1000);
?>
