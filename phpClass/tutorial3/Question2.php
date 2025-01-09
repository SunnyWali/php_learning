<?php
function largest($num1,$num2,$num3)
{
    if($num1>$num2 && $num1>$num3)
    {
        return $num1;
    }
    else if($num2>$num3)
    {
        return $num2;
    }
    else
    {
        return $num3;
    }
}

echo "The largest number is: ".largest(10,20,30)."\n";
echo "The largest number is: ".largest(40,20,30)."\n";
echo "The largest number is: ".largest(40,100,30);
?>