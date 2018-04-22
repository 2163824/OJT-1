<?php

if (isset($_POST['submit'])){
	
	include_once 'database.php';
	$register= new database;

	extract($_POST);
	
	//Error handlers
	//Check for empty fields
	if(empty($username) || empty($subject) || empty($feedback)){
		$register->url("../index.php?=empty");
	exit(); 
	}else{
			//Check if user is registered
			$query = "SELECT * FROM loginsystem WHERE username='$username'";
			$result = mysqli_query($register->conn, $query);
			$resultcheck = mysqli_num_rows($result);
			
			if (!$resultcheck > 0){
				$register->url("../index.php?feedback=user=not=identified");
				exit();
		}else{
		$query = "INSERT INTO feedback (username, subject, text) VALUES ('$username', '$subject', '$feedback')";
		if($register->feedback($query)){
			$register->url("../index.php?=feedback=success");
			exit();
		}
	}
}
}else{
	$register->url("../index.php");
	exit();
}

