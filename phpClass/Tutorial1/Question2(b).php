<?php
function stringReverse($string)
{
    $reverse="";
    for($i=strlen($string)-1;$i>=0;$i--)
    {
        $reverse.=$string[$i];
    }
    return $reverse;
}
$string=readline("Enter the string");
echo "The original string is:".$string;
echo"\n";
echo"The reversed string is:".stringReverse($string);
?>