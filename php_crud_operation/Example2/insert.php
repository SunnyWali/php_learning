<?php
include "dbConnection.php"
 if($isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    if(empty($id))
    {
        //Insert new record into database table
        $sql="Insert into students(name,email,phone) VALUES ("$name","$email","$phone")";

    }
    else
    {
        //update into database table
        $sql="Update students SET name='$name',email='$email',phone='$phone' WHERE id=$id";
    }

    if($conn->query($sql)===TRUE)
    {
        echo "Record Inserted Successfully";
    }
    else
    {
        echo "Error:" .$conn->error;
    }
 }