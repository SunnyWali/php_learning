<?php
function returnTicketPrice($age){
if($age>=0 && $age<=5)
{
    return "No ticket price needed";
}    
else if($age>5 && $age<18)
{
    return "$10 needed for movie ticket";
}
else if($age>=18 && $age<60)
{
    return "$15 needed for movie ticket";
}
else
{
    return "$8 is needed for the movie ticket";
}
}
$age=readline("Enter the age of the person");
echo "".returnTicketPrice($age);
?>
