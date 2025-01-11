<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- starting the session -->
    <?php
    $_SESSION["favcolor"]="green";
    $_SESSION["favanimal"]="dog";
    echo "Session variables are set";
    ?>
    <!-- getting the session values -->
     <?php
     echo "The favourite color of the session is".$_SESSION["favcolor"]."</br>";
     echo "The favourite animal of the session is:".$_SESSION["favanimal"]."</br>";
     ?>
</body>
</html>