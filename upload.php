
<?php include('header1.php') ?>

	<link rel="stylesheet" type="text/css" href="style.css">
	  <div class="header">
  	<h2>Upload Your Document Here</h2>
	<div style="allign:center">
		<a href="loggedin.php"><button class="btn" >Back to Profile</button></a>
		</div>
  </div>
  
	 <div>
	 
		<form method="post" action="insertdoc.php" enctype="multipart/form-data">
		 <label>UPLOAD NEW DOCUMENT (max 2MB)</label>
		
		<input type="file" class="form-control-file" id="image" name="type" >
		 <div class="input-group">
		 <select name="doctype" class="form-control">
        <option>Select Document Type</option>
        <option value="0">10th Mark Sheet</option>
        <option value="1">10th Admit</option>
        <option value="2">10th Registration</option>
      </select>
	  
	  
      </div>

	   <div class="input_fields_wrap">
	   
    </div>
	<!--<div class="input-group">
    <button class="add_field_button">Add More Fields</button>
	</div>-->
	<button class="btn" type="submit" name="submitupload">Upload</button>
		</form>
		
		</div>
<?php include('footer1.php') ?>
<?php if(isset($_POST['submitupload'])) {
	$x = $_POST['doctype'];
	$_POST['filetype'] = $x;
	
}
?>