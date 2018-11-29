<?php include('server.php') ?>
<?php include('header.php') ?>
<?php 

  
  if (isset($_SESSION['username'])) {
 	
  	header('location: home.php');
  } 
?>
	<link rel="stylesheet" type="text/css" href="style.css">
  <div class="header">
  
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="myInput">
  	</div>
	<input type="checkbox" onclick="myFunction()"><span>Show Password</span>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="message">
  		Not yet a Registered? <a href="register.php">Sign up</a>
  	</p>
  </form>
<?php include('footer.php') ?>
