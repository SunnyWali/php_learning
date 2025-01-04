<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row mt-3">
        <div class="col-8 offset-2">
            <form method="POST">
                <label for="name" class="form-label">Name</label>
                <input placeholder="enter the name of the students" name="name" type="text" class="form-control" /><br>
                <label for="email" class="form-label">Email</label>
                <input placeholder="enter the email of the students" name="email" type="text"
                    class="form-control" /><br>
                <label for="phone" class="form-label">Phone</label>
                <input placeholder="enter the number of the students" name="phone" type="number"
                    class="form-control" /><br>
                <input type="submit" value="submit" type="submit">
            </form>
        </div>
    </div>
</body>

</html>


<?php
include "dbConnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO students(name,email,phone) values('$name','$email','$phone')";
    if ($conn->query($sql)) {
        header("location:read.php");
    } else {
        echo "Failed to esablished the connection with the database";
    }
}
$conn->close();
?>