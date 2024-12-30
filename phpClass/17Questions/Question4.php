<?php
function searchIndex($array,$key)
{
    for($i=0;$i<count($array);$i++)
    {
        if($array[$i]==$key)
        {
            return $i;
        }
    }
    return -1;
}
$array=[1,2,5,10,5,6];
$key=10;
$result=searchIndex($array,$key);
echo "The index of the element is :" .$result;
?>