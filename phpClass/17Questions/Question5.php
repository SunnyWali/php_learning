<?php
$array=[1,2,96,4,4,15,8,8,9,9];
$result=[];
$j=0;
//sorting the array
for($i=0;$i<count($array);$i++)
{
    for($j=$i+1;$j<count($array);$j++)
    {
        if($array[$i]>$array[$j])
        {
            $temp=$array[$i];
            $array[$i]=$array[$j];
            $array[$j]=$temp;
        }
    }
}
//removing the duplicate element
for($i=0;$i<count($array)-1;$i++)
{
    if($array[$i]!=$array[$i+1])
    {
        $result[$j++]=$array[$i];
    }
}
$result[$j++]=$array[count($array)-1];
print_r($result);
?>