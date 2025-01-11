<?php
function findLongestString($string)
{
    $longest="";
    foreach($string as $strings)
    {
        if(strlen($strings)>strlen($longest)){
            $longest=$strings;
        }
    }
    return $longest;
}

$strings=["banana","apple","orange","pineapple","guava"];
echo "The longest string is: ".findLongestString($strings);
?>
