<?php include '../includes/database.php';
	  include 'index.php';
	
	$add=new database;
	$subject=$add->subject_show();
	//print_r($addquiz)
	
	
	
	
?>

<html>
	<nav>
			<div class ="navdiv"><a href = "home.php">Home</a></div>
			<div class ="navdiv"><div class = "active"><a href = "addquiz.php">Add Quiz</a></div></div>
			<div class ="navdiv"><a href = "remove.php">Remove Quiz</a></div>
			<div class ="navdiv"><a href = "viewScores.php">View Scores</a></div>
			<div class ="navdiv"><a href = "feedback.php">Feedbacks</a></div>
	</nav>
	
	<div class ="admincontainer">
		<h2>Add Quiz</h2>
		<form method ="post" action ="../includes/addquiz-dbase.php">
		<input type="text" name="quiz" placeholder="Enter quiz">
		<input type="text" name="code" placeholder="Enter course no.">
		<input type="text" name="password" placeholder="Enter quiz password">
		<input type="number" name="total" placeholder="Enter total number of questions"><br>
		<br>
		<button type ="text" name ="submit">Add</button>
		</form>
		
	</div>
<html>