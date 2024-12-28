<?php
$rowCount=5;
for($row=0;$row<$rowCount;$row++)
{
    //spaces
    for($col=0;$col<($rowCount-($row-1));$col++)
    {
    echo "&nbsp";
    }
//stars
for($col=0;$col<($row+1);$col++)
{
    echo "* ";
}
echo "<br>";
}

for($row=$rowCount-1;$row>=0;$row--)
{
    //spaces
    for($col=0;$col<($rowCount-($row-1));$col++)
    {
    echo "&nbsp";
    }
//stars
for($col=0;$col<($row+1);$col++)
{
    echo "* ";
}
echo "<br>";
}
?>