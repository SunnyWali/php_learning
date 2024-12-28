<?php
function callbyRefernece(&$value)
{
    $value++;
    return $value;
}

$original_value=5;
$result=callbyRefernece($original_value);
echo $original_value;
echo "<br>";
echo $result;
