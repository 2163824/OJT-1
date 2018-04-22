<?php
	session_start();
?>

<html>
<head>
	<title>My Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">My Quizzer</a></li>
			</ul>
			<div class="nav-login">
			<?php
					if (isset($_SESSION['username'])){
						echo '<form action = "includes/logout-dbase.php" method="POST">
								<button type ="submit" name ="submit"> Logout </button>
								</form>';
					}else{
						echo '<form action="includes/loginp-dbase.php" method="POST">
								<input type="text" name="username" placeholder="ID Number">
								<input type="password" name="password" placeholder="Password">
								<button type="submit" name="submit">Login</button>
							</form>
							<a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>



</html>