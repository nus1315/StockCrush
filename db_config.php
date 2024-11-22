<?php
// Database connection
$serverna = "localhost";
$username = "root";
$password = "";
$database = "user_registration";

// Connect to database
$conn = new mysqli($serverna, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
