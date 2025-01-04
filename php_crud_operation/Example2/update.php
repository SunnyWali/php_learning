<?php
include "dbConnection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user details
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("location:read.php");
    } else {
        echo "Failed to Update the users";
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
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <label name="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user['name']; ?>" required>
                <label name="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required><br>
                <label name="phone" class="form-label">Phone:</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $user['phone']; ?>" required><br>
                <input type="submit" value="update" type="submit">
            </form>
        </div>
    </div>
</body>
</html>