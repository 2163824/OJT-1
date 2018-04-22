<?php include '../includes/database.php';
	  include 'index.php';
	
	$add=new database;
	$subject=$add->subject_show();
	$add->new_subject();
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
	
	
	<div class = "admincontainer">
		<h2>Enter Quiz Details</h2>
		<?php foreach ($add->new_subject as $new){ ?>
		<h2><?php echo $new['subject_name']; }?></h2>
		<?php for ($i = 1; $i <= $new['totalNumber']; $i ++) { ?>
			<form method ="post" action ="../includes/addquestion-dbase.php">
				<input type="text" name="qus" placeholder="Enter question #<?php echo $i; ?>" style="background-color:#ECF0F1">
				<input type="text" name="op1" placeholder="Enter option 1">
				<input type="text" name="op2" placeholder="Enter option 2">
				<input type="text" name="op3" placeholder="Enter option 3">
				<input type="text" name="op4" placeholder="Enter option 4">
				<input type="text" name="ans" placeholder="Enter answer">
				<br>
				<br>
				<br>
		<?php } ?>	<button type ="text" name ="submit" value ="<?php echo $new['subject_id']; ?> ">Add</button>
			</form><br><br>
	</div>
<html>