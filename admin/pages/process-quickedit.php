<?php

include_once './config.php';

// The mysqli connection that was setup in config.php
global $mysqli;

extract($_POST);

$sql = "UPDATE shipment SET 
       
        current_location = '$current_location', 
        currentt_date = '$current_date', 
        currentt_time = '$current_time', 
        status = '$status', 
        reason_status = '$status_reason'
       
        WHERE id = $id";



$sqll = "INSERT INTO shipment_process(trakin_number,current_location,status,reason,date, time) VALUES('$trackin_number',
'$current_location','$status','$status_reason','$current_date','$current_time')";
// Execute the SQL statement
$process=mysqli_query($mysqli,$sqll);


if (mysqli_query($mysqli, $sql)) {
    mysqli_close($mysqli);
    header('Location: all-shipment.php');
} else {
    echo "Error: " . mysqli_error($mysqli);
}

exit();
?>