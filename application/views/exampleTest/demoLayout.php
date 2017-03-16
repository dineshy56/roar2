<!DOCTYPE html>
<html lang="en">

<!-- ******************************************header****************************** -->
<?php
  	$this->load->view('common/header');
?>
<!-- //****************************************header****************************** -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- *************************************navbar******************************* -->
	<?php
  		$this->load->view('common/navbar');
	?>
	<!--//*************************************navbar******************************* -->
	<!-- Container (Contact Section) -->
	<div id="contact" class="container mycontact">
		<h3 class="text-center">Contact</h3>
		<p class="text-center"><em>We love our fans!</em></p>

		<div class="row">
			<div class="col-md-4">
				<p>Fan? Drop a note.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
				<p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
				<p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
				<br>
				<div class="row">
					<div class="col-md-12 form-group">
						<button class="btn pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>

	</div>


    <!-- ************************Footer************************************* -->
    <?php
     	$this->load->view('common/footer');
    ?>
    <!-- //**********************Footer************************************** -->

    <script>
     	$(document).ready(function(){
           // Initialize Tooltip
           $('[data-toggle="tooltip"]').tooltip(); 
           
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
           	
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
             	
               // Prevent default anchor click behavior
               event.preventDefault();
               
               // Store hash
               var hash = this.hash;
               
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
               	scrollTop: $(hash).offset().top
               }, 900, function(){
               	
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 window.location.hash = hash;
             });
             } // End if
         });
       })
   	</script>

</body>
</html>