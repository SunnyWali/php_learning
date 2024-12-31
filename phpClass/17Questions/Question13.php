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
    $array[$start]=$array[$last];
    $array[$last]=$temp;
    $start++;
    $last--;
}
print_r($array);
for($i=0;$i<count($array);$i++)
{
    if($array[$i]==$array1[$i])
    {
        $count++;
    }
    
}
return $count;
}

$array=[1,1,4];
$result=isPalindrome($array);
if($result==count($array))

{
    echo "The array is Palindrome";
}
else
{
    echo "The array is not Palindrome";
}
?>