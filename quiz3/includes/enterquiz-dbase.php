<?php

include 'database.php';
$enterquiz= new database;
extract($_POST);

if (empty($password)){
		$enterquiz->url("../home.php?password=empty");
		exit();
	}else{	
		$query = "SELECT * FROM subject WHERE password = '$password'";
		$result = mysqli_query($enterquiz->conn, $query);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1){
			$enterquiz->url("../home.php?quiz=passwordnotidentified");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)){
				if($password == false){
					$enterquiz->url("../home.php?password=error");
					exit();
					}elseif ($password== true){
					$_SESSION['subject'] = $row['subject_name'];
					$_SESSION['password'] = $row['password'];
					$enterquiz->url("../question.php");
					exit();
				}
			}	
		}
	}
	

