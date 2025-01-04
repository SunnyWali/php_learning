<?php
include 'dbConnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
header("Location: read.php"); // Redirect back to the main page
?>
