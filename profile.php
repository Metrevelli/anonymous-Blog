<?php
session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	if(isset($_GET['logout'])){	
		session_destroy();
		header("Location: index.php");
		die();
	}
	echo $_SESSION['username'];
	echo "<br><a href='profile.php?logout'>LOG OUT</a>";

	include "Database/dbHelper.php";
	$dbHelper = new dbHelp;
	$postArray = $dbHelper->select("*","post",array(""));
?>
<center>
<form action="createPost.php" method="POST">
	<input type="text" name="title" placeholder="Title">
	<br>
	<textarea placeholder="content" name="content"></textarea>
	<br>
	<input type="submit" name="submit" value="Add">
</form>
</center>
<center>
	<table>
		<tr>
		<?php foreach ($postArray as $key => $value) { ?>
			<td><a href="post.php?postnum=<?= $value['postID']?>"><?=substr($value['title'],0,40)?></a></td>
			<tr>
				<td><?=substr($value['content'],0,40)?></td>
			</tr>
		</tr>
		<?php } ?>
	</table>	
</center>