<?php

if (isset($_POST['submit'])){
	
	include_once 'database.php';
	$register= new database;

	extract($_POST);
	
	//Error handlers
	//Check for empty fields
	if(empty($firstname) || empty($lastname) || empty($username) || empty($password)){
		$register->url("../signup.php?signup=empty");
		exit();
	
		}else{
			//Check if username is already taken. Not yet correct
			$query = "SELECT * FROM loginsystem WHERE username='$username'";
			$result = mysqli_query($register->conn, $query);
			$resultcheck = mysqli_num_rows($result);
			
			if ($resultcheck > 0){
				$register->url("../signup.php?signup=usertaken");
				exit();
			}else{
				//Hash password
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				//Insert user into the database
				$query = "INSERT INTO loginsystem (first_name, last_name, username, password) VALUES ('$firstname', '$lastname', '$username', '$hashedPwd')";
				if($register->loginsystem($query)){
				$register->url("../signup.php?=signup=success");
				exit();
				}
			}
		}
	
	
	
}else{
	$register->url("../signup.php");
	exit();
}




