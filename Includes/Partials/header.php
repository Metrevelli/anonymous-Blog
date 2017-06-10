<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet" integrity="sha384-RpX8okQqCyUNG7PlOYNybyJXYTtGQH+7rIKiVvg1DLg6jahLEk47VvpUyS+E2/uJ" crossorigin="anonymous">
<style type="text/css">
       .panel-body  {
    word-break:break-all
}
.equal {  
    display: -webkit-flex;
    display: flex;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="profile.php">Why? <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
     <?php echo isset($_SESSION['username']) ? '<li><a href="profile.php?logout">Log Out</a></li>':''; ?>
    </ul>
  </div>
</nav>