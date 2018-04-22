<?php
include '../includes/database.php';
include 'index.php';
$showfeed =new database;
$showfeed->show_feed();
//print_r($showfeed->show_feed);
?>

<html>
	<nav>
		<div class ="navdiv"><a href = "home.php">Home</a></div>
		<div class ="navdiv"><a href = "addquiz.php">Add Quiz</a></div>
		<div class ="navdiv"><a href = "remove.php">Remove Quiz</a></div>
		<div class ="navdiv"><a href = "viewScores.php">View Scores</a></div>
		<div class ="navdiv"><div class = "active"><a href = "feedback.php">Feedbacks</a></div></div>
	</nav>

<body>
	<div class ="feedcontainer">
		<table class = "tablecontainer1">
			<h2>Showing Feedbacks</h2>
			<thead>
				<th>ID Number</th>
				<th>Message</th>
			</thead>
			<hr>
			<tbody>
				<?php
					foreach($showfeed->show_feed as $feed){ ?>
				<tr>
					<td><?php echo $feed['username'];?></td>
					<td><?php echo $feed['text'];?></td>
				</tr>
			</tbody>
				<?php } ?>
		</table>
	</div>
</body>
</html>