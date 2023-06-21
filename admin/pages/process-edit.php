<?php

include_once './config.php';

// The mysqli connection that was setup in config.php
global $mysqli;

extract($_POST);

$sql = "UPDATE shipment SET 
        trackin_number = '$trackin_number', 
        title = '$shipment_title', 
        method = '$shipment_method', 
        category = '$shipment_category', 
        product_weight = '$shipment_weight', 
        total_shipment = '$shipment_total', 
        description = '$shipment_description', 
        departure_location = '$departure_location', 
        departure_date = '$departure_date', 
        departure_time = '$departure_time', 
        pickup_location = '$pickup_location', 
        pickup_date = '$pickup_date', 
        pickup_time = '$pickup_time', 
        current_location = '$current_location', 
        currentt_date = '$current_date', 
        currentt_time = '$current_time', 
        status = '$status', 
        reason_status = '$status_reason', 
        sender_name = '$sender_name', 
        sender_email = '$sender_email', 
        sender_contact = '$sender_phone', 
        sender_street = '$receiver_street', 
        sender_city = '$sender_city', 
        sender_country = '$sender_country', 
        receiver_name = '$receiver_name', 
        receiver_email = '$receiver_email', 
        receiver_city = '$receiver_city', 
        receiver_country = '$receiver_country', 
        receiver_contact = '$receiver_phone', 
        product_name = '$product_name', 
        receiver_hphone = '$receiver_house' 
        WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: all-shipment.php');
} else {
    header('Location: /admin/pages/edit-shipment.php?edit=' . $id);
}

exit();
