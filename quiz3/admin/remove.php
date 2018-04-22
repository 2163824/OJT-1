<?php
include '../includes/database.php';
include 'index.php';
$showquiz =new database;
$showquiz->show_quiz();

?>

<html>
	<nav>
		<div class ="navdiv"><a href = "home.php">Home</a></div>
		<div class ="navdiv"><a href = "addquiz.php">Add Quiz</a></div>
		<div class ="navdiv"><div class = "active"><a href = "remove.php">Remove Quiz</a></div></div>
		<div class ="navdiv"><a href = "viewScores.php">View Scores</a></div>
		<div class ="navdiv"><a href = "feedback.php">Feedbacks</a></div>
	</nav>
	
	<div class= "admincontainer">
		<form method ="post" action="../includes/remove-dbase.php">
		<table class = "tablecontainer">
			<thead>
				<th>Subject Name</th>
				<th>Subject Code</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					foreach($showquiz->show_quiz as $quiz){ ?>
				<tr>
					<td> <?php echo $quiz['subject_name'];?></td>
					<td><?php echo $quiz['subject_code'];?></td>
					<td>
					<button type ="text" name ="submit" class ="remove" value = "<?php echo $quiz['subject_id'] ?>">Remove</button></td>
				</tr>
			</tbody>
				<?php } ?>
		</table>
		</form>
	</div>
</body>
</html>