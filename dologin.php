<?php
session_start();
include 'Core/autoLoadClass.php';
if(isset($_SESSION['username'])){
	redirect::to('profile.php');
}
if(!empty($_POST['username']) && !empty($_POST['password'])){
	include 'Database/dbHelper.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$dbHelp = new dbHelp;
	$selectUser = $dbHelp->select("*","users",array("username"=>$username,"password"=>$password));
	if(count($selectUser) != 0){
		$_SESSION['username'] = $username;
		$_SESSION['userID'] = $selectUser[0]['userID'];
		redirect::to('profile.php');
	}else{
		redirect::to('index.php?incorrect');
	}
}else{
	redirect::to("index.php");
}
?>