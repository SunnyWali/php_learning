<?php
function isPalindrome($array)
{
$array1=[];
$count=0;
for($i=0;$i<count($array);$i++)
{
    $array1[$i]=$array[$i];
}
print_r($array1);
$start=0;
$last=count($array)-1;
while($start<$last)
{
    $temp=$array[$start];