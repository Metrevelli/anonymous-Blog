<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: index.php');
		die();
	}

	if(empty($_GET['postnum'])){
		header('Location: profile.php');
		die();
	}
	include "Database/dbHelper.php";
	$dbHelp = new dbHelp;
	if(!empty($_GET['postnum'])){
		include "Database/connect.php";
		$postID = $_GET['postnum'];
		$comments = $dbHelp->select("*","comments",array("postID" => $postID));
		print_r($comments);
		$actualPost = $dbHelp->select("*","post",array("postID" => $postID));
		echo "Post created by ANONYMOUS N: [".$actualPost[0]['anonymousID']."] </br>";
		echo "Title: ".$actualPost[0]['title'];
		echo "<br>";
		echo "Conetent: ".$actualPost[0]['content'];
		echo "<br>";
		if(count($comments) != 0){
			foreach ($comments as $key => $value) {
				echo "<u><h2> comment author: ".$value['anonymousID']."</h2></u> <br>";
				echo "<strong style='margin-left:50px; color:green; font-size:25px;'>".$value['comment']."</strong></br>";
			}
		}else{
			echo "<h3 style='color:red'>[no comments]</h3>";
		}
?>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<textarea name="comment" placeholder="Comment"></textarea>
	<input type="submit" name="Add Comment">
</form>
<?php
}
if(isset($_POST['comment']) && !empty($_POST['comment'])){
	include "Database/connect.php";

	$userID = $_SESSION['userID'];
	$postID = $_GET['postnum'];
	$comment = $_POST['comment'];
	$postOwnerData = $dbHelp->select("anonymousID","post",array("userID" => $userID,"postID" => $postID));
	if(mysqli_num_rows($isThisMyPost) != 0){
		$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $postOwnerData["anonymousID"],'comment' => $comment));
		echo "<meta http-equiv='refresh' content='0;url=post.php?postnum=$postID'>";
	}else{
		$sqll = "SELECT * FROM comments WHERE userID = '$userID' AND postID = '$postID'";
		$userComment = $conn->query($sqll);
		$userCommentArray = array();
		$commenter = $userComment->fetch_array(MYSQLI_ASSOC);

		$commenterID = $commenter['anonymousID'];
		while($roww = $userComment->fetch_array(MYSQLI_ASSOC)){
			$userCommentArray[] = $roww;
		}
			if(mysqli_num_rows($userComment) != 0 ){
				$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $commenterID,'comment' => $comment));
				echo "<meta http-equiv='refresh' content='0;url=post.php?postnum=$postID'>";
			}else{
				$anonymousID = rand(0,3000);
				$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $anonymousID,'comment' => $comment));
				echo "<meta http-equiv='refresh' content='0;url=post.php?postnum=$postID'>";
			}
	}
}
?>
