<?php

session_start();

include 'database.php';
$register= new database;
extract($_POST);

//Error handlers
$username = mysqli_real_escape_string($register->conn, $_POST['username']);

if (empty($username) || empty($password)){
		$register->url("../index.php?login=empty");
		exit();
	}else{	
		$query = "SELECT * FROM loginsystem WHERE username = '$username'";
		$result = mysqli_query($register->conn, $query);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1){
			$register->url("../index.php?login=usernotidentified");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)){
				//De hash Password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if($hashedPwdCheck == false){
					$register->url("../index.php?login=error");
					exit();
				}elseif ($hashedPwdCheck == true){
					//Login the user here
					$_SESSION['username'] = $row['username'];
					$_SESSION['firstname'] = $row['first_name'];
					$_SESSION['lastname'] = $row['last_name'];
					$register->url("../home.php");
					exit();
				}
			}	
		}
	}

