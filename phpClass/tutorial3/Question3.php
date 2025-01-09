<?php
function checkString($string)
{
    $length=strlen($string);
    echo "The length of the string is:".$length."\n";
    $uppercase=strtoupper($string);
    echo "The string with the upper case is:".$uppercase."\n";
    $subString=substr($string,3,5);
    echo "The substring from 3 to 7 is:".$subString;
}

$string=readline("Enter a string");
checkString($string);
?>