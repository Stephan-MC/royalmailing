<?php
// Create a connection to the database
require 'config.php';

global $mysqli;

// Check if the connection is successful
if (!$mysqli) {
    die("mysqliection failed: " . mysqli_connect_error());
}

$id=$_REQUEST['id']; 
// Define the DELETE query
$sql = "DELETE FROM shipment WHERE id = $id";

// Execute the DELETE query
if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: all-shipment.php');

} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

// Close the mysqliection
mysqli_close($mysqli);
?>
