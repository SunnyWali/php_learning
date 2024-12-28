<!-- Arrow function is used to write the code clean and concise
 They autommatically return the value
 They capture variables from the parent scope making them handy for the call backs -->
<?php
$sum=fn($num1,$num2)=>$num1+$num2;
$result=$sum(5,5);
echo $result;
?>