<?php
// Replace 'root' with your MySQL username and 'admin123' with your password.
$conn = new mysqli('localhost', 'root', 'admin123', 'obrsphp');

if ($conn->connect_error) {
    error_reporting(0);
    die("Could not connect to MySQL: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}
?>
