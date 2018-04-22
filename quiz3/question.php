<?php
include 'header.php';
include 'includes/database.php';
$question=new database;
$subject=$_POST['subject'];
$question->question($subject);
$_SESSION['subject']=$subject;
?>

<html>

	<body>
	
		<div class="question-container">
			<form action="answer.php" method="post">
			<div class ="ques-table">
			<?php 
			$i=1;
			foreach($question->question as $qust) {
			?>
			<table class="question-table">
				<thead>
					<tr class="warning">
						<th><?php echo $i; ?>)  <?php echo $qust['question']; ?></th>
					</tr>
				</thead>
				<tbody>
				<?php if(isset($qust['ans1'])){ ?>
					<tr>
						<td><input type="radio" value="0" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans1']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans2'])){ ?>
					<tr>
						<td><input type="radio" value="1" name="<?php echo $qust['question_id']; ?>" />&nbsp; <?php echo $qust['ans2']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans3'])){ ?>
					<tr>
						<td><input type="radio" value="2" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans3']; ?></td>
					</tr>
				<?php } ?>
				<?php if(isset($qust['ans4'])){ ?>
					<tr>
						<td><input type="radio" value="3" name="<?php echo $qust['question_id']; ?>" /> &nbsp;<?php echo $qust['ans4']; ?></td>
					</tr>
				<?php } ?>
					<tr>
						<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['question_id']; ?>" /></td>
					</tr>
				</tbody>
			</table>
			<?php $i++;} ?>
			<center><input type="submit" value="Submit Quiz" class="submit"/></center>		
			</div>
		</form>
		</div>
	</body>


</html>