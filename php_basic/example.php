<?php
$arr=[1,2,3,4,5];
function sum(&$arr)
{
    array_push($arr,6);
}

sum($arr);
print_r($arr);
?>
