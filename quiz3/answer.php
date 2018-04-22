<?php
include 'header.php';
include 'includes/database.php';
$ans= new database;
$answer=$ans->answer($_POST);
$total_qus= $answer['right']+$answer['wrong']+$answer['no_answer'];
?>

<html>

	<body class="body1">
	<div class="final-container">
	<form action="includes/scores-dbase.php" method="post">
		<center>
			<h2>You have completed the test!</h2><br>
			<hr>
			<br>
			<p>Correct: <?php echo $answer['right']; ?> </p>
			<p>Wrong: <?php echo $answer['wrong']; ?> </p>
			<p>No answer: <?php echo $answer['no_answer']; ?> </p>
			<br>
			<hr>
			<br>
			<p>You got: <?php echo $answer['right'];?> / <?php echo $total_qus; ?> </p>
		</center>
		<button type="submit" name="submit"> Exit </button>
	</div>
	</body>

</html>