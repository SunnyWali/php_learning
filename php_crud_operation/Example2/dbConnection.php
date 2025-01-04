<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName='quantum';

$conn=new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error)
{
    die("Connection failed to established" .$conn->connect_error);
}
