
<?php
	include_once 'Includes/Partials/header.php';
	include 'Includes/Errors/loginErrorsAndLogout.php';
?>
</script>
	<center>
	<span></span>
	<span></span>
	<span id="first" style="font-size: 100px" class="glyphicon glyphicon-eye-close"></span>
	<br>
	</br>
	</br>
	<label>Log IN</label>
		<hr>
		<form method="POST" action="dologin.php" class="form-horizontal">
	<fieldset>
	    <div class="form-group">
	      <label for="username" class="col-lg-4 control-label">Username</label>
	      <div class="col-lg-4">
	        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="password" class="col-lg-4 control-label">Password</label>
	      	      <div class="col-lg-4">
	        <input type="password" class="form-control" id="password" placeholder="Password" name="password" placeholder="password">
	      </div>
	    </div>
		<div class="form-group">
	      <div class="col-lg-4 col-lg-offset-4">
	        <button type="submit" class="btn btn-success btn-lg">Log in <span class="glyphicon glyphicon-eye-default"></span></button>
	      </div>
	    </div>
	</fieldset>

		</form>
		<br>
		<br>
		<br>
		<label>REGISTER</label>
		<hr>
		<form method="POST" action="register.php" class="form-horizontal">
	<fieldset>
	    <div class="form-group">
	      <label for="username" class="col-lg-4 control-label">Username</label>
	      <div class="col-lg-4">
	        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="password" class="col-lg-4 control-label">Password</label>
	      	      <div class="col-lg-4">
	        <input type="password" class="form-control" id="password" placeholder="Password" name="password" placeholder="password">
	      </div>
	    </div>
		<div class="form-group">
	      <div class="col-lg-4 col-lg-offset-4">
	        <button type="submit" class="btn btn-warning btn-lg">Register <span class="glyphicon glyphicon-plus-sign"></span></button>
	      </div>
	    </div>
	</fieldset>
	</center>
<?php include_once 'Includes/Partials/header.php'; ?>