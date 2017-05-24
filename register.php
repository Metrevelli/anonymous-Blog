<?php
session_start();
if(!empty($_POST['username']) && !empty($_POST['password'])){
include 'Database/connect.php';
$username = $_POST['username'];
$userExists = "SELECT * FROM users WHERE username = '$username' ";
$result = $conn->query($userExists);
	if(mysqli_num_rows($result) == 0){
		$password = md5($_POST['password']);
		$insertUser = "INSERT INTO users (username,password) VALUES ('$username','$password')";
		$insertUserResult = $conn->query($insertUser);
		if($insertUserResult){
			$conn->close();
			$_SESSION['username'] = $username;
			header("Location: profile.php");
			die();
		}
	}else{
		header("Location: index.php?userExists");
		die();	
	}
}else{
	header("Location: index.php?emptyUsernamePassword");
	die();
}
?>