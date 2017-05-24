<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
	die();
}
print_r($_POST);
if(!empty($_POST['title']) && !empty($_POST['content'])){
	include 'Database/connect.php';
	$title = $_POST['title'];
	$content = $_POST['content'];
	$userID = $_SESSION['userID'];
	$anonymousID  = rand(0,3000);
$insertPost = "INSERT INTO post (title,content,userID,anonymousID) VALUES ('$title','$content','$userID','$anonymousID')";
	$conn->query($insertPost);
	$conn->close();
	header('Location: profile.php');
	die();
}
?>