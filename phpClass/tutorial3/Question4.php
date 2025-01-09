<?php
function swap(&$a,&$b){
    $c=$a;
    $a=$b;
    $b=$c;
    echo "Value of a after swapping:".$a."\n";
    echo "Value of b after swapping:".$b."\n";
}
$a=10;
$b=20;
swap($a,$b);
echo "Value of a after calling function:".$a."\n";
echo "Value of b after calling function:".$b;
?>