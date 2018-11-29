
<?php include('header1.php') ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	  <div class="header">
  	<h2>Visitors</h2>
	<div style="allign:center">
		<a href="loggedin.php"><button class="btn" >Back to Profile</button></a>
		</div>
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
		<th colspan="4"><h2>Visitor's Name</h2></th>
	</tr>
	<?php
	$username=$_SESSION['username'];

$query="select visitorid from visitors where userid='$username'";
$result=mysqli_query($db,$query);
	while($rows=mysqli_fetch_assoc($result))
	{		

	?>
	<tr>
	<td><h5><?php echo $rows['visitorid']; ?></h5></td>
	</tr>
	<?php 
	}
	?> 
		</table>
		</div>
<?php include('footer1.php') ?>
<?php if(isset($_POST['submitupload'])) {
	$x = $_POST['doctype'];
	$_POST['filetype'] = $x;
	
}
?>