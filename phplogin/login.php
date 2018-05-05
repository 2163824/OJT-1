<?php
    session_start();
    require('connect.php');

    if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE id_number='$username' AND password='$password'";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $user = mysqli_fetch_row($result);
        if ($user[0] == $username && $user[1] == $password) {
            $_SESSION['username'] = $username;

            Header("Location: index.html");
        } else {
            echo "Invalid Login Credentials";
            echo "<a href='login.html'><br>Back</a>";
        }
    }
 ?>
