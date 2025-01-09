<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post">
        <h3>Choose a value</h3>
        <select name="value">
            <option name="1">1</option>
            <option name="2">2</option>
            <option name="3">3</option>
            <option name="4">4</option>
            <option name="5">5</option>
            <option name="6">6</option>
            <option name="7">7</option>
            <option name="8">8</option>
            <option name="9">9</option>
            <option name="10">10</option>
        </select>
        <input type="submit" name="submit" value="generate" />
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $value=$_POST['value'];
    echo"<h3>The multiplication table is: </h3>";
    echo"<table border='1'>";
    for($i=1;$i<=10;$i++)
    {
        echo "<tr> <td>".$i."x".$value."=".$i*$value."</td> </tr>";
    }
    echo"</table>";
}
?>