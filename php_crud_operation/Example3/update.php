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
            <form action="update.php" method="POST">
            <input name="id" type="hidden" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" class="form-control">
                <label for="Name" class="form-label">Name</label>
                <input placeholder="enter the name" name="name" type="text" class="form-control">
                <label for="Email" class="form-label">Email</label>
                <input placeholder="enter the email" name="email" class="form-control" />
                <label for="Phone" class="form-label">Phone</label>
                <input placeholder="enter the number" class="form-control" name="phone" /><br>
                <input type="submit" value="update" />
            </form>
        </div>
    </div>
</body>

</html>

<?php
include "dbConnection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST[id];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql="UPDATE students SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
    if($conn->query($sql)===TRUE)
    {
        header("location:read.php");
    }
    else
    {
        echo "Failed to Update the users";
    }
}
?>