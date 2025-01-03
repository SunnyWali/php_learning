<?php
include "dbConnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "Insert into students(name,email,phone) VALUES ('$name','$email','$phone')";
    if ($conn->query($sql)) {
        header("Location:read.php");
    } else {
        echo "Data failed to saved successfully";
    }
}
?>
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
            <label for="Name" class="form-label">Name</label>
            <input placeholder="enter the name" name="name" type="text" class="form-control" />
            <label for="Email" class="form-label">Email</label>
            <input placeholder="enter the email" name="email" type="text" class="form-control" />
            <label for="Phone" class="form-label">Phone</label>
            <input placeholder="enter the phone of the users" name="phone" type="number" class="form-control" /><br>
            <input type="submit" value="submit" name="submit" />
        </form>
    </div>
    </div>

</body>

</html>