<!-- Issue: cant accept the char ' on the feedback. -->

<?php
	include 'header.php';
?>

<div class = "feedbackcontainer">
		<h2>Send us your feedback</h2>
		<form action="includes/feedback-dbase.php" method="post">
			<div id ="leftfeed">
				<p> ID Number: </p><br><br><br>
				<p> Subject: </p>
			</div>
			<div id ="rightfeed">
				<input name="username" placeholder="Enter your ID Number" type="text"><br/>    
				<input name="subject" placeholder="Enter short description of your feedback" type="text"> 
			</div>
			<div id ="below">
				<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here. Keep it clean and simple."></textarea>			
				<div class="form-group" align="center">
				<button type="submit" name="submit"> Send my feedback </button>
				</div>
			</div>
		</form>
	</div>
