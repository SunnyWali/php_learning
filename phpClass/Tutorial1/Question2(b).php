<?php
$string=readline("enter the string");
$reversed=" ";
for($i=strlen($string)-1;$i>=0;$i--)
{
    $reversed.=$string[$i];
}
echo $reversed;
?>