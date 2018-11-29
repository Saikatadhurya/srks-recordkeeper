
<?php
session_start();


	if(isset($_POST['submitupload'])){
		
        // connect to the database
     include "connect.php";
	//Stores the filename as it was on the client computer.
   $imagename1 = basename($_FILES['type']['name']);
 //Stores the tempname as it is given by the host when uploaded.
	$imagetemp1 = basename($_FILES['type']['tmp_name']);
	
	$image_size = $_FILES['type']['size'];

	//The path you wish to upload the image to
    //$imagePath = "image/";
      $sess = $_SESSION['username'];
	  $file = $_POST['doctype'];
	  $ext = ".jpg"; 
	 // $type = $_POST['type'];
        $query = "UPDATE `users`  SET `$file` = '$sess$file$ext' WHERE username= '$sess' LIMIT 1";
        
        if($image_size<=2000000)
		{
			
			if(move_uploaded_file($_FILES["type"]["tmp_name"],"image/" . $sess . $file . $ext))
	  {
		  mysqli_query($db, $query);
		    echo "<script>alert('Successfully Uploaded!!!'); window.location='loggedin.php'</script>";
	  }
	  else {
		  echo "<script>alert('Not Successfully Uploaded!!!'); window.location='upload.php'</script>";
	  }
	}
	else 
		{
			echo("<script>alert('Larger Image, Only 2MB file size is valid.'); window.location='upload.php'</script>");
		}
	}
	 /*if(isset($_POST['submitupload'])){
		 
		 $x = $_FILES['type']['name'];
		 echo $x;
		 
	 }*/
?>