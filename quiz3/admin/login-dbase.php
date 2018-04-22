<?php

session_start();

if (isset($_POST['submit'])){
include '../includes/database.php';
$register= new database;
extract($_POST);
echo $facultyID;
echo $password;

//Error handlers
$facultyID = mysqli_real_escape_string($register->conn, $_POST['facultyID']);
$password = mysqli_real_escape_string($register->conn, $_POST['password']);

if (empty($facultyID) || empty($password)){
		$register->url("index.php?login=empty");
		exit();
	}else{	
		$query = "SELECT * FROM admin WHERE facultyID = '$facultyID'";
		$result = mysqli_query($register->conn, $query);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1){
			$register->url("index.php?login=usernotidentified");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)){
				if($password == false){
					$register->url("index.php?login=errorz");
					exit();
				}elseif ($password == true){
					//Login the user here
					$_SESSION['facultyID'] = $row['facultyID'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$register->url("home.php");
					exit();
				}
			}	
		}
	}
}else{
	$register->url("index.php?login=error");
}

