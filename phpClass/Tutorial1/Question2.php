<?php
function findVowels($string)
{
    $count=0;
    for($i=0;$i<strlen($string);$i++)
    {
        if($string[$i]=='a' || $string[$i]=='e' || $string[$i]=='i' || $string[$i]=='o' || $string[$i]=='u')
        {
            $count++;
        }
    }
    return $count;
}
$string=readline("Enter the string");
echo "The number of vowels in the word are: ".findVowels($string);
?>