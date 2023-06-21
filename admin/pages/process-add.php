<?php

$servername = "localhost";
$username = "royalmailing_royal";
$password = "Hitme@2020Admin";
$dbname = "royalmailing_royal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

extract($_POST);

$trackin_number = mt_rand(100000000, 999999999);
$title = $_POST['shipment_title'];
$method = $_POST['shipment_method'];
$category = $_POST['shipment_category'];
$product_name = $_POST['product_name'];
$product_weight = $_POST['shipment_weight'];
$total_shipment = $_POST['shipment_total'];
$description = $_POST['shipment_description'];
$departure_location = $_POST['departure_location'];
$departure_date = $_POST['departure_date'];
$departure_time = $_POST['departure_time'];
$pickup_location = $_POST['pickup_location'];
$pickup_date = $_POST['pickup_date'];
$pickup_time = $_POST['pickup_time'];
$current_location = $_POST['current_location'];
$current_date = $_POST['current_date'];
$current_time = $_POST['current_time'];
$status = $_POST['status'];
$reason_status = $_POST['status_reason'];
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$sender_phone = $_POST['sender_phone'];
$product_name = $_POST['product_name'];
$sender_street = $_POST['receiver_street'];
$sender_city = $_POST['sender_city'];
$sender_country = $_POST['sender_country'];
$receiver_name = $_POST['receiver_name'];
$receiver_email = $_POST['receiver_email'];
$receiver_city = $_POST['receiver_city'];
$receiver_country = $_POST['receiver_country'];
$receiver_contact = $_POST['receiver_phone'];
$receiver_hphone = $_POST['receiver_house'];
$receiver_hphone = $_POST['receiver_house'];


$sql = "INSERT INTO shipment (
    trackin_number, title, method, category, product_weight, total_shipment, description,
    departure_location, departure_date, departure_time, pickup_location, pickup_date, pickup_time,
    current_location, currentt_date, currentt_time, status, reason_status, sender_name, sender_email,
    sender_contact,  sender_street, sender_city, sender_country, receiver_name,
    receiver_email, receiver_city, receiver_country, receiver_contact,product_name, receiver_hphone
) VALUES (
    '$trackin_number', '$title', '$method', '$category', '$product_weight', '$total_shipment', '$description',
    '$departure_location', '$departure_date', '$departure_time', '$pickup_location', '$pickup_date', '$pickup_time',
    '$current_location', '$current_date', '$current_time', '$status', '$reason_status', '$sender_name', '$sender_email',
    '$sender_phone', '$sender_street', '$sender_city', '$sender_country', '$receiver_name',
    '$receiver_email', '$receiver_city', '$receiver_country', '$receiver_contact' ,'$product_name' ,'$receiver_hphone'
)";
$result = mysqli_query($conn, $sql);

$sqll = "INSERT INTO shipment_process(trakin_number,current_location,status,reason,date, time) VALUES('$trackin_number',
'$current_location','$status','$reason_status','$current_date','$current_time')";
// Execute the SQL statement
$process=mysqli_query($conn,$sqll);


if (!$process) {
    // There was an error executing the SQL statement
    echo "Error: " . mysqli_error($conn);
    exit();
}

if ($result ) {
    echo" Data was inserted successfully";
    header('Location: all-shipment.php');
    exit();  
} else {
    // There was an error inserting the data
    echo "Error: " . mysqli_error($conn);
    exit();
}

mysqli_close($conn);
?>
