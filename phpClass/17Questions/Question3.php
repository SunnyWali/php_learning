<?php
$array=[1,5,6,7,8,3];
$sum=0;
for($i=0;$i<count($array);$i++)
{
    $sum+=$array[$i];
}
$average=$sum/count($array);
echo "The sum of the array is: ".$sum; 
echo "\n";
echo "The average of the array is: ".$average;
