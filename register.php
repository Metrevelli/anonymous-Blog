<?php
session_start();
include 'Core/autoLoadClass.php';
if(!empty($_POST['username']) && !empty($_POST['password'])){
include 'Database/connect.php';
include 'Database/dbHelper.php';
$dbHelp = new dbHelp;
$username = $_POST['username'];
$ifUserExists = $dbHelp->select("*","users",array("username"=>$username));
	if(count($ifUserExists) == 0){
		$password = md5($_POST['password']);
		$insertUser = $dbHelp->insert('users',array('username'=>$username,'password'=>$password));
		if($insertUser){
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