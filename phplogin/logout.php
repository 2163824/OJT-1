<?php
    session_start();
    require('connect.php');

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }

    unset($_SESSION['username']);
    header('Location: login.html');
 ?>
