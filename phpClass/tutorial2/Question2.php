<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Generator</title>
</head>
<body>
    <h1>Generate a Table</h1>
    <form action="" method="post">
        <label for="rows">Number of Rows:</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <br><br>
        <label for="columns">Number of Columns:</label>
        <input type="number" id="columns" name="columns" min="1" required>
        <br><br>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = intval($_POST['rows']);
        $columns = intval($_POST['columns']);

        echo "<h2>Generated Table:</h2>";
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
        
        for ($i = 0; $i < $rows; $i++) {
            $bgColor = ($i % 2 == 0) ? "#f2f2f2" : "#ffffff"; // Alternate row colors
            echo "<tr style='background-color: $bgColor;'>";
            
            for ($j = 0; $j < $columns; $j++) {
                echo "<td style='padding: 10px;'>Row " . ($i + 1) . " Col " . ($j + 1) . "</td>";
            }
            
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
