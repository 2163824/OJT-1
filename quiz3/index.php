<?php
	include 'header.php';
?>
<html>
<head>
	<title>My Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="slider">
		<div class="load">
		</div>
		<div class="content">
			<div class="principal">
				<p>Study hard now. Be proud later.</p>
				<a href ="#feedback">Give Feedback</a>
			</div>
		</div>
	</div>
	
	
	<div id ="feedback">
		<div class = "feedbackcontainer">
			<h2>Send us your feedback!</h2>
			<form action="includes/feedback-dbase.php" method="post">
				<div id ="leftfeed">
					<p> ID Number: </p><br><br>
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
	</div>

</body>


</html> 
