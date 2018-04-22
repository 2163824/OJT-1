<?php

if (isset($_POST['submit'])){
	
	include_once 'database.php';
	$addquiz= new database;

	extract($_POST);
	
	//Error handlers
	//Check for empty fields
	if(empty($quiz) || empty($code) || empty($password)){
		$addquiz->url("../admin/addquiz.php?quiz=empty");
		exit();
	
		}else{
			//Check if subjecr name is already taken.
			$query = "SELECT * FROM subject WHERE subject_code='$code'";
			$result = mysqli_query($addquiz->conn, $query);
			$resultcheck = mysqli_num_rows($result);
			
			if ($resultcheck > 0){
				$addquiz->url("../admin/addquiz.php?quizname=taken");
				exit();
			}else{
				//Insert into the database
				$query = "INSERT INTO subject (subject_name, subject_code, password, totalNumber) VALUES ('$quiz', '$code', '$password', '$total')";
				if($addquiz->addsubject($query)){
				echo "data insert successfully";
				$addquiz->url("../admin/addquestion.php");
				exit();
				}
			}
		}
	
	
	
}else{
	$addquiz->url("../admin/addquiz.php");
	exit();
}





?>