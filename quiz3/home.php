<?php

include 'header.php';
include 'includes/database.php';
$username=$_SESSION['username'];
$profile =new database;
$profile->user_profile($username);
$profile->subject_show();
	
?>


<html>
	<body class ="body1">
	
		<div class ="profilecontainer">
			<p>Welcome<?php 
					foreach($profile->data as $prof)
					{ ?>
						
							<?php echo $prof['first_name'];?>
							<?php echo $prof['last_name'];?>
					<?php } ?> !</p>
		</div>
		
		<div class="subject-container">
					<br>	
						<form method="post" action="question.php" class="startquiz">
						<select class="startquiz" id="" name="subject">
						<option>Select Subject</option>
						<?php
							foreach($profile->subject as $subject){
							?>	
							<option value="<?php echo $subject['subject_id'] ?>"><?php echo $subject['subject_name'] ?></option>
							<?php	}
						?>
						</select><br>
						<br>
						<center><button type="submit" name="submit">Start Quiz</button></center>
						</form>
				</div>
	</body>
</html>

