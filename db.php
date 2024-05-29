<?php
$dbhost = 'localhost';     // replace with your database host name
    $dbuser = 'root';          // replace with your database username
    $dbpass = '';      // replace with your database password
    $dbname = 'demo';    // replace with your database name
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>