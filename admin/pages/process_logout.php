<?php

session_start();

unset($_SESSION['loggedIn']);
unset($_SESSION['user_id']);

header("Location: index.php");
