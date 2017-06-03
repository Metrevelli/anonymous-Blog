<?php
	session_start();
	include_once 'Includes/Partials/header.php';
	include 'Core/autoLoadClass.php';
	if(!isset($_SESSION['username'])){
		redirect::to('index.php');
	}

	if(empty($_GET['postnum'])){
		redirect::to('profile.php');
	}
	include "Database/dbHelper.php";
	$dbHelp = new dbHelp;
	if(!empty($_GET['postnum'])){
		include "Database/connect.php";
		$postID = $_GET['postnum'];
		$comments = $dbHelp->select("*","comments",array("postID" => $postID));
		// print_r($comments);
		$actualPost = $dbHelp->select("*","post",array("postID" => $postID));
		if(count($actualPost) != 0){

			echo "<div class='container'><div class='row'><strong style='color:red'>Post created by ANONYMOUS N: [".$actualPost[0]['anonymousID']."]</strong> </br>";
			echo "<h3>Title: <i>".$actualPost[0]['title']."</i></h3>";
			echo "<br>";
			echo "<div class='col-lg-10 '>Conetent: </div><div class='well well-lg col-lg-4'>".$actualPost[0]['content']."</div>";
			echo "<br>";
			if(count($comments) != 0){
				foreach ($comments as $key => $value) {
					echo "<div class='col-lg-10'><u> comment author: ".$value['anonymousID']."</u></div>";
					echo "<div class='well col-lg-4 panel-body'><strong style='margin-left:50px; color:green;'>".$value['comment']."</strong></div></br>";
				}
			}else{
				echo "<h3 style='color:red'>[no comments]</h3>";
			}
	}else{
		redirect::to(404);
	}
?>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div class="form-group">

	      <div class="col-lg-10">
	        <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="comment"></textarea>
	      </div>
    </div>
		<div class="form-group">
      		<div class="col-lg-10">
        		<button type="submit" class="btn btn-info">[ Add Comment ] <span class="glyphicon glyphicon-send"></span></button>
      		</div>
    	</div>
</form>
</div>
</div>
<?php
}
if(isset($_POST['comment']) && !empty($_POST['comment'])){
	include "Database/connect.php";
	$userID = $_SESSION['userID'];
	$postID = $_GET['postnum'];
	$comment = $_POST['comment'];
	$postOwnerData = $dbHelp->select("*","post",array("userID" => $userID,"postID" => $postID));
	if(count($postOwnerData) != 0){
		$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $postOwnerData[0]["anonymousID"],'comment' => $comment));
		redirect::to("post.php?postnum=$postID");
	}else{
		$commenter = $dbHelp->select("*","comments",array("userID"=>$userID,"postID"=>$postID));
			if(count($commenter) != 0){
				$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $commenter['anonymousID'],'comment' => $comment));
				redirect::to("post.php?postnum=$postID");
			}else{
				$anonymousID = rand(0,3000);
				$dbHelp->insert('comments',array('userID' => $userID,'postID' => $postID,'anonymousID' => $anonymousID,'comment' => $comment));
				redirect::to("post.php?postnum=$postID");
			}
	}
}
include_once 'Includes/Partials/header.php';
?>
