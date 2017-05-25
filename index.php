<!DOCTYPE html>
<html>
<?php
	include 'Includes/Errors/loginErrorsAndLogout.php';
?>
	<head>
	</head>
	<body>
	<center>
		<form method="POST" action="dologin.php">
			<input type="text" name="username" placeholder="username">
			<br>
			<input type="password" name="password" placeholder="password">
			<br>
			<input type="submit" name="submit">
		</form>
		<br>
		<br>
		<br>
		<label>register</label>
		<form method="POST" action="register.php">
			<input type="text" name="username" placeholder="username">
			<br>
			<input type="password" name="password" placeholder="password">
			<br>
			<input type="submit" name="submit">
		</form>
	</center>
	</body>
</html>