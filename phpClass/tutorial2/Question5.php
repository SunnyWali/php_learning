<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="number">Enter a number</label>
        <input type="number" name="num" /><br><br>
        <input type="submit" name="check" />
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    function isPrime(){
    $num=$_POST['num'];
    if($num<=1)
    {
        return false;
    }
    else
    {
        for($i=2;$i<=$num/2;$i++)
        {
            if($num%$i==0)
            {
                return false;
            }
        }
    }
    return true;
}
$result=isPrime();
if($result)
{
    echo "The number is prime";
}
else
{
    echo "The number is not prime";
}
}
?>