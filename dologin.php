<?php
session_start();
if(isset($_SESSION['username'])){
	header("Location: profile.php");
	die();
}
if(!empty($_POST['username']) && !empty($_POST['password'])){
	include 'Database/connect.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$userLogIn = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($userLogIn);
	if(mysqli_num_rows($result) != 0){
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$conn->close();
		$_SESSION['username'] = $username;
		$_SESSION['userID'] = $row['userID'];
		header("Location: profile.php");
		die();
	}else{
		header("Location: index.php?incorrect");
		die();
	}
}
?>