<!DOCTYPE html>
<html lang="en">

<!-- ******************************************header****************************** -->
<?php
  	$this->load->view('common/header');
?>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#homeActive").removeClass("active");
		$("#ridingRulesActive").addClass("active");
		$("#aboutUsActive").removeClass("active");
		$("#contactUsActive").removeClass("active");
	});
</script>

<style type="text/css">
	.ridingRulesSideLogo{
		background-image: url('<?php echo base_url(); ?>assets/img/royalGroupStanding.jpg');
		height: 400px;
		width: 100%;
	}
</style>
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
			<h3 class="text-center">Riding Rules</h3>
			<p class="text-center"><em><!-- We love our fans! --></em></p>

			<div class="row">
				<div class="col-md-6">
					<ol class="ruleOL">
						<li class="ruleLi"> Ride shall be undertaken only after proper documentation viz. – Driving license, Registration, Insurance, PUC is in order.</li>
						<li class="ruleLi"> Rides must not begin or resume after intoxication (alcohol, drug etc).</li>
						<li class="ruleLi"> No rider shall be allowed to undertake a ride without proper and minimum riding gear viz. – Riding Jacket, Gloves, Knee & Elbow Protectors, Full face helmet and shoes.</li>
						<li class="ruleLi"> All riders must be prompt and clear in their financial transactions & deposit their contribution prior to begining the ride failing which the rider will lose his right to ride with the group. Contribution amount collected from the riders towards an organised ride will not be returned under any circumstances.</li>
						<li class="ruleLi"> All decisions before, during and after a ride to be taken with the consensus of group members.</li>
						<li class="ruleLi"> Decisions taken by the group will final and binding on all group members.</li>
						<li class="ruleLi"> The entire group will undertake any ride together in a Single File formation with each rider following  the other.</li>
						<li class="ruleLi"> Riding sequence to be fixed prior to undertaking a ride and followed meticulously.</li>
						<li class="ruleLi"> No rider shall overtake the Lead Rider or fall behind the Tail Rider decided by the management. Each rider shall maintain his sequence in the ride and follow the rider whom he trailed from the beginning of the ride.</li>
						<li class="ruleLi">Never overtake from the wrong side on single passing roads.</li>
						<li class="ruleLi">Riding speeds should be maintained between 60 Kmph & 80Kmph on highways and between 30 Kmph & 40Kmph in city limits.</li>
						<li class="ruleLi">no unnecessary honking and intential exaust firing near hospital/school/residential area.</li>
						<li class="ruleLi">Traffic rules must be followed strictly. Traffic signals shall be followed strictly irrespective of the time of the day.</li>
						<li class="ruleLi">No promotion of any Brand/Shop/Business/Job/Profession. if found will be removed from the group with immidiate effect.</li>
						<li class="ruleLi">Failure to comply with any of the above rules shall lead to removal of the rider from  the ride/group.</li>
					</ul>
				</div>

				<div class="col-md-6" >
					<div class="ridingRulesSideLogo">
						
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