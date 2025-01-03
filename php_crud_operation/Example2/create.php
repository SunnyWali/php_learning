<?php
include "dbConnection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql="Insert into students(name,email,phone) VALUES ('$name','$email','$phone')";
    if($conn->query($sql)){
        header("Location:read.php");
    }
    else
    {
        echo "Data failed to saved successfully";
    }
}
?>
<form method="POST">
    <input placeholder="enter the name" name="name" type="text"/><br>
    <input placeholder="enter the email" name="email" type="text" /><br>
    <input placeholder="enter the phone of the users" name="phone" type="number"/><br>
    <input type="submit" value="submit" name="submit" />
</form>