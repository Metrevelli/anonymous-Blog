<?php
	session_start();
	
	if(isset($_SESSION['username'])){
		header("Location: profile.php");
		die();
	}
	if(isset($_GET['emptyUsernamePassword'])){
		echo "Username/Password values must be set";
	}
	if(isset($_GET['userExists'])){
		echo "user with that username already exists";
	}
	if(isset($_GET['incorrect'])){
		echo "Incorrect Username or Password";
	}
	if(isset($_GET['logOUt'])){
		session_destroy();
	}
?>