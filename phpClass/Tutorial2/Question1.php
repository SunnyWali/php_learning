<?php
$age=readline("enter the age of the person");
if($age>=0 && $age<=5)
{
    echo "No ticket needed to buy";
}
else if($age>5 && $age<18)
{
    echo "The ticket price is $10";
}
else if($age>=18 && $age<60)
{
    echo "The ticket price is $15";
}
else
{
    echo "The ticket price is $8";
}
?>