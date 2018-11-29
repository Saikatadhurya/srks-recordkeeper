
<?php include('header1.php') ?>
<?php 
 $sess = $_SESSION['username'];


  if (!isset($sess)) {
 	
  	header('location: index.php');
  } 
?>
<?php 	
if(isset($_POST['submit'])){
	include ('connect.php');
if (!$db) {
	exit();
	header('location: index.php');
}else {
 $search = $_POST['searchterm'];
 $find = mysqli_query($db,"SELECT * From users WHERE uniqueid='$search'");
 
 $rows=mysqli_fetch_assoc($find);
 $userid = $rows['username'];
 $visitorid = $_SESSION['username'];
 include ('count.php');
?>
<link rel="stylesheet" type="text/css" href="style.css">
	  <div class="header">
  	<h2>Search Result</h2>
	<div style="allign:center">
		<a href="index.php"><button class="btn" >Back to Home</button></a>
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
		<th colspan="4"><h2><?php if($rows['username']): echo"<div class='alert alert-success' role='alert'>"; echo $rows['username']; echo "</div>"?>
		<?php else: echo "<div class='alert alert-danger' role='alert'>Result Not Found!! Wrong Unique ID.</div>"; endif;?></h2></th>
		</tr>
		<tr>
		<th>NAME OF DOCUMENT</th>
		<th>DOCUMENT</th>
	</tr>

	<tr>
	<td><?php if($rows['0']) echo "10th MARKSHEET"; ?></td>
	<td><a href="image/<?php echo $rows['0']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['0'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['0']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td>
	<?php else: ?>
		
	<?php endif; ?>
	</tr>
	<tr>
	<td><?php if($rows['1']) echo "10th ADMIT"; ?></td>
	<td><a href="image/<?php echo $rows['1']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['1'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['1']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td>
		<?php else: ?>
		
	<?php endif; ?>
	</tr>
	<tr>
	<td><?php if($rows['2']) echo "10th REGISTRATION"; ?></td>
	<td><a href="image/<?php echo $rows['2']; ?>" data-toggle="lightbox" data-max-width="600">
	<?php if($rows['2'] != ""): ?>
    <img class="img-fluid" src="image/<?php echo $rows['2']; ?>" width="100px" height="100px" style="border:1px solid #333333;"></a></td>
		<?php else: ?>
		
	<?php endif;
}
}
	?>
	</tr>
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



	<!-- All the scripts -->

	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/script.js"></script>
	
</body>
</html>