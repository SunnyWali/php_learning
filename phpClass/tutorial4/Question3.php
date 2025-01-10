<?php
function stringPalindrome($string)
{
    $reversed="";
    for($i=strlen($string)-1;$i>=0;$i--)
    {
        $reversed.=$string[$i];
    }
    if($string==$reversed)
    {
        echo "The string is palindrome";
    }
    else
    {
        echo "The string is not palindrome";
    }
}
$string=readline("enter the strings");
stringPalindrome($string);
?>