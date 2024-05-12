<?php

$conn = mysqli_connect("mysql.hostinger.com","u240496009_trish","Trish_12345","u240496009_trish");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connection successfully";

$conn->close();
?>

