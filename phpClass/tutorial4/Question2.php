<?php
function ascendingArray($array)
{
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
    return $array;
}
$array=[1,2,5,8,74,52,36,54,2];
echo "The ascending array is: ";
print_r(ascendingArray($array));
?>