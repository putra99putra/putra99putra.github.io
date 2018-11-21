<?php
session_start();
if(isset($_SESSION['isLoginAkademik'])){
	if($_SESSION['isLoginAkademik']){
		header("Location:./index.php");
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>LOGIN PAGE</title>
		<link rel="stylesheet" type="text/css" href="style-login.css"/>
	</head>
	<body>
		<div class="container">
			<h2>LOGIN SISTEM</h2>
			<form action="validasi.php" method="post" name="form">
				<label for="username">Username</label>
				<input type="text" name="username">
				<label for="password">Password</label>
				<input type="password" name="password">
				<br>
				<center><button type="submit">LOGIN</button></center>
			</form>
		</div>
	</body>
</html>