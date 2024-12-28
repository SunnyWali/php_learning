<!-- Whenever you pass a variable with the value to the function then php creates the copy of that function anychanges made to the variable inside the function wont affect the original variable values which is called as call by value -->
 <?php
 function callbyValue($value)
 {
    $value++;
    return $value;
 }

 $original_value=5;
$result=callbyValue($original_value);
echo $original_value;
echo "<br>";
echo $result;
?>
 