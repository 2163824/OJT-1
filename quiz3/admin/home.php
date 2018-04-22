<?php
include '../includes/database.php';
include 'index.php';
$facultyID = $_SESSION['facultyID'];
$showquiz =new database;
$showquiz->show_quiz();
//print_r($showquiz->show_quiz);
?>

<html>
<body class = "body2">
	<nav>
		<div class ="navdiv"><div class = "active"><a href = "home.php">Home</a></div></div>
		<div class ="navdiv"><a href = "addquiz.php">Add Quiz</a></div>
		<div class ="navdiv"><a href = "remove.php">Remove Quiz</a></div>
		<div class ="navdiv"><a href = "viewScores.php">View Scores</a></div>
		<div class ="navdiv"><a href = "feedback.php">Feedbacks</a></div>
	</nav>
	
	<div class= "admincontainer">
		<h2>Showing Active Quizzes</h2><hr><br>
		<table class = "tablecontainer">
			<thead>
				<th>Subject Name</th>
				<th>Class Number</th>
				<th>Status</th>
			</thead>
			<tbody>
				<?php
					foreach($showquiz->show_quiz as $quiz){ ?>
				<tr>
					<td><?php echo $quiz['subject_name'];?></td>
					<td><?php echo $quiz['subject_code'];?></td>
					<td id = "password">Active</td>
				</tr>
			</tbody>
				<?php } ?>
		</table>
	</div>
</body>
</html>