<?php
// db.php: Database connection file

// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student"; // Update database name to 'student'

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>