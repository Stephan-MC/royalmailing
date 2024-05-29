<?php
require "../../db.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM contact_messages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header('Location: index.php');
    } else {
        // If there's an error, send an error response
        http_response_code(500);
        echo "Error deleting record.";
    }

    // Proceed with your delete operation
} else {
    echo "Error: No ID provided.";
    // You can redirect or handle the error in another way
}
