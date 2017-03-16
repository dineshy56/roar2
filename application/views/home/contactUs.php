<!DOCTYPE html>
<html lang="en">

<!-- ******************************************header****************************** -->
<?php
  	$this->load->view('common/header');
?>
<script type="text/javascript">
  $( document ).ready(function() {
    $("#homeActive").removeClass("active");
    $("#ridingRulesActive").removeClass("active");
    $("#aboutUsActive").removeClass("active");
    $("#contactUsActive").addClass("active");
  });
</script>
<!-- //****************************************header****************************** -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- *************************************navbar******************************* -->
	<?php
  		$this->load->view('common/navbar');
	?>
	<!--//*************************************navbar******************************* -->
	<!-- Container (Contact Section) -->
	<div id="contact" class="container ">
    <div class="aboutus">
    <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <img src="<?php echo base_url(); ?>assets/img/logo006.png">
            </div>
            <div class="col-sm-4"></div>
        </div>
		<h3 class="text-center">Contact</h3>
		<!-- <p class="text-center"><em>We love our fans!</em></p> -->

		<div class="alert alert-success" id="emailSuccessMessage" style="display:none;">
		  	<strong>Success!</strong> Message Sent Successfully.
		</div>

		<div class="row">
			<div class="col-md-4">
				<p>Fan? Drop a note.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Miraroad, Thane, Maharashata, India</p>
				<p><span class="glyphicon glyphicon-phone"></span> Dharmesh Pathare:<a href="tel:+91-7709805768"> +91-7709805768 </a> </p>
        <p><span class="glyphicon glyphicon-phone"></span> Neemit Gandhi:<a href="tel:+91-9029497813"> +91-9029497813 </a> </p>
        <p><span class="glyphicon glyphicon-phone"></span> Rishi Dubey: <a href="tel:+91-8082494837"> +91-8082494837 </a> </p>


				<p><span class="glyphicon glyphicon-envelope"></span> Email:<a href="mailto:riders@roaringenfield.com">riders@roaringenfield.com</a></p>
			</div>
			<div class="col-md-8">
				<form method="post" id="contactUsForm">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
						</div>
						<div class="col-sm-6 form-group">
							<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
						</div>
					</div>
					<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required ></textarea>
					<br>
					<div class="row">
						<div class="col-md-12 form-group">
							<button class="btn pull-right" type="button" onclick="contactUsForm();">Send</button>
						</div>
					</div>
				</form>
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

   	<script type="text/javascript">
   		function contactUsForm() {
   			var form = $('#contactUsForm')[0]; 
            var formData = new FormData(form);
   			$.ajax({
   				url:  "<?php echo site_url(''); ?>/home/contactUsForm",
   				type: "POST",
   				data:  formData,
   				contentType: false,
   				cache: false,
   				processData:false,

   				beforeSend: function() {
   					// $("#displayLoader").css('display','block');
   				},

   				success: function(data){
   					var objJson = JSON.parse(data);
   					if (objJson.txtsuccess == false) {
   						// alert(objJson.txtsuccess);
   					} else if (objJson.txtsuccess == true) {
   						$('#emailSuccessMessage').css('display', 'block');
   						// alert(objJson.txtsuccess);


   						// window.location = "<?php echo site_url(''); ?>/api/passwordUpdatedSuccessFully";
                        // window.location="http://www.tutorialspoint.com";
                    }
                },

                 error: function(){
                   	alert('please try again');
                }
            });
   		}
   	</script>

</body>
</html>