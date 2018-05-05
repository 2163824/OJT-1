<?php
    DEFINE("DB_USER", "root");
    DEFINE("DB_PASSWORD", "root");
    DEFINE("DB_HOST", "localhost:3306");
    DEFINE("DB_NAME", "accounts");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 ?>
