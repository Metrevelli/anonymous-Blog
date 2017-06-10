<?php
	session_start();
	include 'Core/autoLoadClass.php';
	include_once 'Includes/Partials/header.php';

	if(!isset($_SESSION['username'])){
		redirect::to('index.php');
	}
	if(isset($_GET['logout'])){	
		session_destroy();
		redirect::to('index.php');
	}
	include "Database/dbHelper.php";
	$dbHelper = new dbHelp;
	$postArray = $dbHelper->select("*","post",array(""));
?>
<form action="createPost.php" method="POST" class="form-horizontal">
<fieldset>
    <div class="form-group">
      <label for="inputPostName" class="col-lg-4 control-label">Title</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="inputPostName" placeholder="Post Title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label for="content" class="col-lg-4 control-label">Content</label>
      <div class="col-lg-4">
        <textarea class="form-control" rows="3" id="content" name="content" placeholder="content"></textarea>
      </div>
    </div>
	<div class="form-group">
      <div class="col-lg-10 col-lg-offset-4">
        <button type="submit" class="btn btn-info">[ Add Post ] <span class="glyphicon glyphicon-send"></span></button>
      </div>
    </div>
	</fieldset>
</form>
<div class="container">
	<div class="row">
			<?php foreach ($postArray as $key => $value) { ?>
			<a href="post.php?postnum=<?= $value['postID']?>">
			  <div class="panel panel-danger col-md-4">
			    <div class="panel-heading "><?=substr($value['title'],0,42)?> <span class="label label-success">Hey Yo</span></div>
			      <div class="panel-body">
			          <p><?=substr($value['content'],0,95)?></p>
			      </div>
			  </div>
			</a>
			<?php } ?>
	</div>
</div>
<?php include_once 'Includes/Partials/header.php'; ?>