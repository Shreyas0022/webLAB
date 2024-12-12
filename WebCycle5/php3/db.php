<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "studentreg"; // Your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>