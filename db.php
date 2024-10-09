<?php
$host = "localhost";
$db_username = "root"; 
$db_password = ""; 
$db_name = "user_database"; 

$conn = new mysqli($host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
