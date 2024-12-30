<?php
$string=readline("enter a string");
for($row=0;$row<strlen($string);$row++)
{
    for($col=0;$col<$row+1;$col++)
    {
        echo $string[$col];
        
    }
    echo "\n";
}
?>