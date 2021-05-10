<?php
require 'include/config.php';

session_start();

if ($_SESSION['status'] == "invalid" || empty($_SESSION['status'])) {
	$_SESSION['status'] = "invalid";
}

if ($_SESSION['status'] == "valid") {
	header('location:dashboard.php');
}

if (isset($_POST['login'])) {
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) || empty($password)) {
		echo "<script>alert('Fill up all field!')</script>";
	}else{
		$queryMessage = "SELECT * FROM admin_detail WHERE username = '$username' AND password = md5('$password')";
		$sqlMessage = mysqli_query($connection, $queryMessage);
		$result = mysqli_fetch_array($sqlMessage);

		if(mysqli_num_rows($sqlMessage) > 0) {
			$_SESSION['status'] = "valid";
			$_SESSION['username'] = $result['username'];
			header('location:dashboard.php?login-success');
		}else{
			$_SESSION['status'] = "invalid";
			echo "<script>alert('Invalid Credentials!')</script>";
		}
	}
}


 ?>

<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="container">
		<form action="index.php" method="post">
			<div class="logo">
				<img src="image/user.png" alt="Admin">
			</div>
			<div class="inputText">
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="inputPass">
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="inputBtn">
				<input type="submit" name="login" value="Login &#x27A3;">
			</div>
		</form>
	</div>
	<script type="text/javascript">
		//.....
	</script>

</body>
</html>






<!------------ MADE BY JOKERML ------------>