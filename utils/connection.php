<?php
$servername = "localhost";
$database = "roomies";
$username = "admin";
$password = "monarchs";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 
}
?>
