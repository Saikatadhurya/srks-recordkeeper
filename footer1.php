

<!-- ****************************** Footer ************************** -->

		<section id="footer" style="margin-top:10px;">
			<section class="container">
				<section class="row">
					<div class="col-sm-6">
						<!--<span>Made By</span>
						<h1 class="footer-logo">
							<a href="#">Saikat & Co</a>
						</h1>-->
					</div>
					<div class="col-sm-6">
						<p class="copyright">All &copy; Copyright Reserved 2018</p>
					</div>
				</section>
			</section>
		</section>

		 
		 
        
        
        
       
      

	<!-- All the scripts -->

	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/script.js"></script>
		<script>
	$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><hr><input type="file"  class="form-control-file" id="image" name="<?php  ?>"><div class="input-group"><select class="form-control" id="sel1"><option>Select Document Type</option><option>10th Mark Sheet</option><option>10th Admit</option> <option>10th Registration</option></select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
		})	
	});
</script>	
	
</body>
</html>