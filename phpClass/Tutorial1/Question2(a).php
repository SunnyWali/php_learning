<?php
$count=0;
$string=readline("enter the string");
for($i=0;$i<strlen($string);$i++)
{
    if($string[$i]=='a' || $string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' ||$string[$i]=='u')
    {
        $count++;
    }
}
echo $count;
?>