<?php
$serverName='localhost';
$userName='root';
$password="";
$dbName='university';

$conn=new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die("Connection establishment failed" .$conn->connect_error);
}
?>