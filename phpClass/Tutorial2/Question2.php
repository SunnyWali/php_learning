<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input placeholder="enter the row of the table" name="row" /><br>
        <input placeholder="enter the column of the table" name="col" /><br>
        <input type="submit" value="get" name="submit" />
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $row = intval($_POST['row']);
    $col = intval($_POST['col']);
    if ($row > 0 && $col > 0) { 
        echo "<h2>Generated Table:</h2>";
        echo "<table border='1'";
        for ($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $col; $j++) {
                echo "<td> Row $i,Col$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>