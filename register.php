<?php include('server.php') ?>
<?php include('header.php') ?>

<?php 

  
  if (isset($_SESSION['username'])) {
 	
  	header('location: loggedin.php');
  } 
?>
	<link rel="stylesheet" type="text/css" href="style.css">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" id="myInput">
  	</div>
	<input type="checkbox" onclick="myFunction()"><span>Show Password</span>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="message">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
<?php include('footer.php') ?>
