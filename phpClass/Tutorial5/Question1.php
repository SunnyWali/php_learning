<!-- Create an associative array of students and their grades. Write a PHP script to loop 
through the array and print each student’s name and grade in HTML table.  -->

<?php
$fruits=[
    "ramesh"=>75,
    "mahima"=>80,
    "prakash"=>85,
    "ghanshyam"=>90
];
echo "<h2>The table is : </h2>";
echo "<table border='1'";
echo "<tr> <th> Students </th> <th> Grades </th> </tr>";
foreach($fruits as $key=>$value)
{
    echo "<tr>
    <td>".$key."</td>
    <td>".$value."</td>
    </tr>";
}
echo "</table>";
?>

