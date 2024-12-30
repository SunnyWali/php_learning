<?php
if(isset($_POST['submit'])){
    $string=$_POST['string'];
$reversed=" ";
for($i=strlen($string)-1;$i>=0;$i--)
{
    $reversed .=$string;
}
echo $reversed;
}