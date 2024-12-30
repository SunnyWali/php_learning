<?php
$array=[0,5,4,8,19,5];
$max=$array[0];
$min=$array[0];
for($i=0;$i<count($array);$i++)
{
    if($array[$i]>$max)
    {
        $max=$array[$i];
    }
    else if($array[$i]<$min)
    {
        $min=$array[$i];
    }
}
echo "The maximum value is: ".$max;
echo "The minimum value is: ".$min;
?>