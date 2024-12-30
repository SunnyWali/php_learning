<!-- Reverse an array -->
<?php
$array=[2,5,6,7,8];
$start=0;
$last=count($array)-1;
while($start<$last)
{
    $temp=$array[$start];
    $array[$start]=$array[$last];
    $array[$last]=$temp;
    $start++;
    $last--;
}
print_r($array);
?>