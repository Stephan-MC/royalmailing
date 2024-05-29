<?php
// Create a connection to the database
$host = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "demo"; // Change this to your MySQL database name

$conn = new mysqli($host, $username, $password, $database);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_REQUEST['id']; 
// Define the DELETE query
$sql = "DELETE FROM shipment WHERE id = $id";

// Execute the DELETE query
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: all-shipment.php');

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
