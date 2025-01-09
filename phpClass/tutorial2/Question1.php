<?php
$age=readline("enter the age of the users");
if($age>=0 && $age<6)
{
    echo "There is no charge for the movie ticket";
}
else if($age>5 && $age<18)
{
    echo "$10 is required for the movie ticket";
}
else if($age>=18 && $age<60)
{
    echo "$15 is required for the movie ticket";
}
else
{
    echo "$8 is required for the movie ticket";
}
?>