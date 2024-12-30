<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    
    <!-- Form to select a number -->
    <form method="POST">
        <label for="number">Choose a number (1-10):</label>
        <select name="number" id="number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" value="Generate">
    </form>

    <?php
    if (isset($number)) {
        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$number × $i = " . ($number * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
