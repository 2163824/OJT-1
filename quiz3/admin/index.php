<?php 	session_start();
?>
<html>
	<head>
		<title>My Quizzer</title>
		<link rel="stylesheet" a href="css/style.css"/>
	</head>
	
	<body class = "body1">
		
			<?php
			if (isset($_SESSION['facultyID'])){
			echo '<div class ="logout">
					<div class ="logout1">
					<p>My Quizzer</p>
					</div>
					<div class ="logout2">
					<form action = "logout-dbase.php" method="POST">
					<button type ="submit" name ="submit"> Logout </button>
					</form>
					</div>
				</div>';
			}else{
				echo '<div class="container">
					<center><img src="css/slulogo.png"/></center>	
					<form action = "login-dbase.php" method="POST">
					<div class="form_input">
							<input type="text" name="facultyID" placeholder="Enter Username"/>
						</div>
						<div class="form_input">
							<input type="password" name="password" placeholder="Enter Password"/>
						</div>
						<button type="submit" name="submit"> Login </button>
					</form>
				</div>';
			} ?>
			
	</body>
</html>

