<?php
// Database Configuration
$host = "localhost"; // Change this to your MySQL server hostname
$username = "royalmailing_royal"; // Change this to your MySQL username
$password = "Hitme@2020Admin"; // Change this to your MySQL password
$database = "royalmailing_royal"; // Change this to your MySQL database name

// Connect to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>