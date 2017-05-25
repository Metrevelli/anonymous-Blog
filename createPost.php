<?php
session_start();
include 'Core/autoLoadClass.php';
if(!isset($_SESSION['username'])){
	redirect::to('index.php');
}
print_r($_POST);
if(!empty($_POST['title']) && !empty($_POST['content'])){
	include 'Database/connect.php';
	include 'Database/dbHelper.php';
	$dbHelp = new dbHelp;
	$title = $_POST['title'];
	$content = $_POST['content'];
	$userID = $_SESSION['userID'];
	$anonymousID  = rand(0,3000);
	$dbHelp->insert("post",array("title"=>$title,"content"=>$content,"userID"=>$userID,"anonymousID"=>$anonymousID));
	redirect::to('profile.php');
}
?>