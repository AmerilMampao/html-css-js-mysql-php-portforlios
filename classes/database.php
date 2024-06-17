<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";  // Empty password for XAMPP MySQL
$database = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
