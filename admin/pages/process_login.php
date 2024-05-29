<?php
session_start(); // start a new session

// retrieve submitted username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password;
// validate input
if (empty($username) || empty($password)) {
    // username or password was not provided, redirect back to the login page with an error message
    $_SESSION['login_error'] = 'Username and password are required';
    header('Location: /login.php');
    exit();
}

// check username and password against the database using prepared statements to prevent SQL injection
// (this is just an example and may vary depending on your database schema)
$conn = mysqli_connect('localhost', 'root', '', 'demo');
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username=? AND password=?");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    // username and password were correct, set session variables and redirect to the homepage
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');
    exit();
} else {
    // username and password were incorrect, redirect back to the login page with an error message
    $_SESSION['login_error'] = 'Invalid username or password';
    header('Location: login.php');
    exit();
} 