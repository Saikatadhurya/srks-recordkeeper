<?php 
  session_start(); 
  

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php 
include "connect.php";
$username=$_SESSION['username'];


?>
 <?php
                        //Eastablishing Connection With Server.
                       

                        if (isset($_GET['del'])) {
							 if(isset($_GET['val'])) 
							 {
                            $del = $_GET['del'];
							$val = $_GET['val'];
							
							
                            //SQL query for deletion.
							 $query = "SELECT * FROM users WHERE username='".$username."'";
						$result = mysqli_query($db,$query);
						
        $delete = mysqli_fetch_assoc($result);
            $image = $delete[$val];
            $file= "image/".$image;
            unlink($file);
		  $query = "UPDATE users SET `".$val."` = '' WHERE username='".$username."'";
        mysqli_query($db,$query);
							 }
                        }
						?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>S R K S - A record keeper</title>

	<!-- meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/stylenew.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />

	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">

	<!-- ****************************** Preloader ************************** -->

<div id="preloader"></div>

	<!-- ****************************** Sidebar ************************** -->

	<nav id="sidebar-wrapper">
		<a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
	    <ul class="sidebar-nav">
		    <li><a href="home.php">Home</a></li>
			<li><a href="home.php#subscribe">Search for Records</a></li>
			<li><a href="home.php#team">Development Team</a></li>
			<li><a href="home.php#contact">Contact us</a></li>
			<li><a href="loggedin.php">Profile</a></li>
			<li><a href="index.php?logout='1'">Logout</a></li>
			
	    </ul>
	</nav>

	<!-- ****************************** Header ************************** -->

	<header class="sticky" id="header">
		<section class="container">
			<section class="row" id="logo_menu">
				<section class="col-xs-8"><a class="logo" href="home.php">S R K S - Record Keeper</a></section>
				<section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
			</section>
		</section>
	</header>
	
	<link rel="stylesheet" type="text/css" href="style.css">
<div class="header">
	<h2>Your Profile</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $username; ?></strong></p>
		<?php $query="select * from users where username='$username'";
				$result=mysqli_query($db,$query);
				$row=mysqli_fetch_assoc($result);
				$uniqueid=$row['uniqueid'];?>
		<p> Your Unique id: <strong><?php echo $uniqueid; ?></strong></p>
		<?php include ('countdisp.php');	?>
		<p> Number of Unique Visitors: <strong><?php echo $visitor; ?></strong></p>
		
    	<p> <a href="index.php?logout='1'" style="color: red;"><button class="btn" >logout</button></a> </p>
		<a href="visitorview.php"><button class="btn" >View Visitors</button></a>
		<a href="upload.php"><button class="btn" >New Upload</button></a>
	
    <?php endif ?>

	</div>

	<div style="
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
    border-radius: 10px 10px 10px 10px;
  margin-top:10px;opacity:0.8;max-width: 800px;">
		<table align="center" style="width:100%; background:#ffffff;">
	<tr>
		<th colspan="4"><h2>Student Record</h2></th>
		</tr>
		<tr>
		<th>NAME OF DOCUMENT</th>
		<th>DOCUMENT</th>
	</tr>
	<?php
	$username=$_SESSION['username'];

$query="select * from users where username='$username'";
$result=mysqli_query($db,$query);
	while($rows=mysqli_fetch_assoc($result))
	{		

	?>
	<tr>
	<td><?php if($rows['0']) echo "10th MARKSHEET"; ?></td>
	<td><a href="image/<?php echo $rows['0']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['0'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['0']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td><td> <?php echo "<b><a href=\"loggedin.php?del={$rows['0']}&val=0\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?></td>
	<?php else: ?>
		
	<?php endif; ?>
	</tr>
	<tr>
	<td><?php if($rows['1']) echo "10th ADMIT"; ?></td>
	<td><a href="image/<?php echo $rows['1']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['1'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['1']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td><td> <?php echo "<b><a href=\"loggedin.php?del={$rows['1']}&val=1\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?></td>
		<?php else: ?>
		
	<?php endif; ?>
	</tr>
	<tr>
	<td><?php if($rows['2']) echo "10th REGISTRATION"; ?></td>
	<td><a href="image/<?php echo $rows['2']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['2'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['2']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td><td> <?php echo "<b><a href=\"loggedin.php?del={$rows['2']}&val=2\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?></td>
		<?php else: ?>
		
	<?php endif; ?>
	</tr>
	<?php
	} 
	?>
</table>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
<script>
$(document).ready(function ($) {
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
     event.preventDefault();
    $(this).ekkoLightbox();
      }); 
});
</script>
 <?php include('footer.php'); ?>