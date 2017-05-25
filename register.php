<?php
session_start();
if(!empty($_POST['username']) && !empty($_POST['password'])){
include 'Database/connect.php';
include 'Database/dbHelper.php';
include 'Core/autoLoadClass.php';
$dbhelp = new dbHelp;
$username = $_POST['username'];
$userExists = "SELECT * FROM users WHERE username = '$username' ";
$result = $conn->query($userExists);
	if(mysqli_num_rows($result) == 0){
		$password = md5($_POST['password']);
		$insertUser = "INSERT INTO users (username,password) VALUES ('$username','$password')";
		$insertUserResult = $conn->query($insertUser);
		if($insertUserResult){
			$_SESSION['username'] = $username;
			redirect::to('profile.php');
		}
	}else{
		redirect::to('index.php?userExists');
	}
}else{
	redirect::to('index.php?emptyUsernamePassword');
}
?>