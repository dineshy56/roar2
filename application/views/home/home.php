<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php
  	$this->load->view('common/header');
?>
<!-- //header -->
<style type="text/css">
	/*body{
		text-align: center;
		background: #00ECB9;
	  	font-family: sans-serif;
	  	font-weight: 100;
	}

	h1{
	  	color: #396;
	  	font-weight: 100;
	  	font-size: 40px;
	  	margin: 40px 0px 20px;
	}*/

	#clockdiv{
		font-family: sans-serif;
		color: #fff;
		display: inline-block;
		font-weight: 100;
		text-align: center;
		font-size: 30px;
	}

	#clockdiv > div{
		padding: 10px;
		border-radius: 3px;
		background: #414144;
		display: inline-block;
	}

	#clockdiv div > span{
		padding: 15px;
		border-radius: 3px;
		background: #eeeeee;
		display: inline-block;
		color: #3d3d40;
	}

	.smalltext{
		padding-top: 5px;
		font-size: 16px;
	}
</style>

<script type="text/javascript">
	$( document ).ready(function() {
	    $("#homeActive").addClass("active");
		$("#ridingRulesActive").removeClass("active");
		$("#aboutUsActive").removeClass("active");
		$("#contactUsActive").removeClass("active");
	});
	
</script>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- navbar -->
	<?php
  		$this->load->view('common/navbar');
	?>
	<!-- //navbar -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	 	<!--**** Sportloght **** -->
	 	<!-- Swiper -->
	 	<div class="spotHolder">
	 		<div class="swiper-container">
	 			<div class="swiper-wrapper">
	 				<div class="swiper-slide" id="sliderSpot1">
	 					<div Class="sliderHolder"> 

	 						<div class="middelContent">
	 							<!-- <div class="spotLightLogo">
	 								<img src="<?php echo base_url(); ?>assets/img/logo003.png">
	 							</div>
	 							<span class="firstTextLabel">Unlock A Better Planet</span><br>
	 							<span class="secondTextLabel">E-waste is not what our planet deserves.</span><br> -->
	 							<!-- <div class="recyleHomeBtnHolder">
	 								<button type="button" class="recyleHomeBtn">Recycle yourApple device</button>
	 							</div -->
	 						</div>
	 					</div>

	 				</div>

	 				<div class="swiper-slide" id="sliderSpot2">
	 					
		 					<div Class="sliderHolder"> 
		 						
		 						<div class="middelContent">
		 						<!-- <div class="spotLightLogo">
	 								<img src="<?php echo base_url(); ?>assets/img/logo001.png">
	 							</div>
		 							<span class="firstTextLabel">Unlock A Better Planet</span><br>
		 							<span class="secondTextLabel">E-waste is not what our planet deserves.</span><br> -->
		 							<!-- <div class="recyleHomeBtnHolder">
		 								<button type="button" class="recyleHomeBtn">Recycle yourApple device</button>
		 							</div> -->
		 						</div>
		 					</div>

	 					
	 				</div>

	 				<div class="swiper-slide" id="sliderSpot3">
	 
		 					<div Class="sliderHolder"> 
		 						
		 						<div class="middelContent">
		 						<!-- <div class="spotLightLogo">
	 								<img src="<?php echo base_url(); ?>assets/img/logo003.png">
	 							</div>
		 							<span class="firstTextLabel">Unlock A Better Planet</span><br>
		 							<span class="secondTextLabel">E-waste is not what our planet deserves.</span><br> -->
		 							<!-- <div class="recyleHomeBtnHolder">
		 								<button type="button" class="recyleHomeBtn">Recycle yourApple device</button>
		 							</div> -->
		 						</div>
		 					</div>

	 					
	 				</div>
	 			</div>
	 			<!-- Add Pagination -->
	 			<div class="swiper-pagination"></div>
	 			<!-- Add Arrows -->
	 			<div class="swiper-button-next"></div>
	 			<div class="swiper-button-prev"></div>
	 		</div>
	 	</div>
	 	<!-- Swiper JS -->
	 	<script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>
	 	<!-- Initialize Swiper -->
	 	<script>
	 		var swiper = new Swiper('.swiper-container', {
	 			pagination: '.swiper-pagination',
	 			nextButton: '.swiper-button-next',
	 			prevButton: '.swiper-button-prev',
	 			slidesPerView: 1,
	 			paginationClickable: true,
	 			spaceBetween: 30,
	 			loop: true
	 		});
	 	</script>
	 	<!-- xxx Spot Light xxxx-->
	</div>
 <!-- Container (The Band Section) -->
      <!-- <div id="band" class="container text-center">
         <h3>CHOOSE</h3>
         <h2>Device To Recycle</h2>
         <p><em>We love music!</em></p>
         <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <p class="text-center"><strong>Name</strong></p>
               <br>
               <a href="#demo" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo" class="collapse">
                  <p>Guitarist and Lead Vocalist</p>
                  <p>Loves long walks on the beach</p>
                  <p>Member since 1988</p>
               </div>
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>Name</strong></p>
               <br>
               <a href="#demo2" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo2" class="collapse">
                  <p>Drummer</p>
                  <p>Loves drummin'</p>
                  <p>Member since 1988</p>
               </div>
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>Name</strong></p>
               <br>
               <a href="#demo3" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo3" class="collapse">
                  <p>Bass player</p>
                  <p>Loves math</p>
                  <p>Member since 2005</p>
               </div>
            </div>
         </div>
     </div> -->
    <div id="band" class="container text-center">
        <!-- <h3>CHOOSE</h3>
        <h2>Device To Recycle</h2>
        <p><em>We love music!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         <br> -->
        <div class="row">
         	<div class="col-lg-6">
         		<p class="text-center"><strong>Next Ride Begins in</strong></p>
         		<br>
         		<div id="clockdiv">
					<div>
						<span class="days"></span>
						<div class="smalltext">Days</div>
					</div>
					<div>
						<span class="hours"></span>
						<div class="smalltext">Hours</div>
					</div>
					<div>
						<span class="minutes"></span>
						<div class="smalltext">Minutes</div>
					</div>
					<div>
						<span class="seconds"></span>
						<div class="smalltext">Seconds</div>
					</div>
				</div>
				<br><br>
				
				<p class="text-center"> LAVASA( Maharashtra ) - 1N\2D </p>
				
				

               <!-- <a href="#demo" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
           </a> -->
               <!-- <div id="demo" class="collapse">
                  <p>Guitarist and Lead Vocalist</p>
                  <p>Loves long walks on the beach</p>
                  <p>Member since 1988</p>
              </div> -->
         	</div>
      		<div class="col-lg-6">
          		<p class="text-center"><strong>Archived ride</strong></p>
          		<br>
          		<div>
          			<ul class="rideUl">
          				<li class="ride">
          					<b>PAWANA LAKE</b>  300kms <i>Date: 11/12/2016</i>
						</li>
						<li class="ride">
          					<b>BHANDARDARA</b>   300kms <i>Date: 31/12/2016</i>
						</li>
						<li class="ride">
          					<b>26th January Rally</b> 50kms <i>Date: 26/01/2017</i>
						</li>
						<li class="ride">
          					<b>RAJODI BEACH</b> 100kms <i>Date: 26/01/2017</i>
						</li>
						<li class="ride">
          					<b>Daman</b> 310kms <i>Date: 04/03/2017</i>
						</li>
          			</ul>
          		</div>
               <!-- <a href="#demo2" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
           </a> -->
               <!-- <div id="demo2" class="collapse">
                  <p>Drummer</p>
                  <p>Loves drummin'</p>
                  <p>Member since 1988</p>
              </div> -->
          </div>
      	</div>
  	</div>
  	<!-- Container (TOUR Section) -->
  	<div id="tour" class="bg-1">
  		<div class="container">
            <!-- <h3 class="text-center">TOUR DATES</h3>
            <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
            <ul class="list-group">
               <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
               <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
               <li class="list-group-item">November <span class="badge">3</span></li>
           	</ul> -->
           	<div class="row text-center">
	           	<div class="col-sm-4">
	           		<div class="thumbnail" >
	           			<img src="<?php echo base_url(); ?>assets/img/bottom1.jpg" alt="Paris" width="400" height="300">
	           			<p><strong>Member Benefits</strong></p>
	           			<p>Free Shirts</p>
	           			<button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
	           		</div>
	           	</div>
	           	<div class="col-sm-4">
	           		<div class="thumbnail">
	                     <!-- <p><strong>Raigad</strong></p>
	                     <p>24/01/2017</p> -->
	                    <img src="<?php echo base_url(); ?>assets/img/bottom2.png" alt="New York" width="400" height="300">
	                    <p><strong>Lavasa (Maharashtra) 450kms   1N\2D  </strong></p>
	                    <p>15/04/2017 to 16/04/2017</p>
	                    <!-- <br> -->
	                    <!-- <button class="btn" data-toggle="modal" data-target="#modalJoin">Join</button> -->
	                    <!-- <button class="btn" onclick="joinTripModal('1');">Join</button> -->
	                    <button class="btn" onclick="alreadyMember('1')">Join</button>
	                 </div>
	             </div>
	            <div class="col-sm-4">
	             	<div class="thumbnail">
	             		<img src="<?php echo base_url(); ?>assets/img/bottom3.jpg" alt="San Francisco" width="400" height="300">
	             		<p><strong>Leh</strong></p>
	             		<p>19/05/2017</p>
	             		<!-- <button class="btn" onclick="joinTripModal('2');">Join</button> -->
	             		<button class="btn" onclick="alreadyMember('2')">Join</button>
	             	</div>
	            </div>
         	</div>
     	</div>
     	<!-- Modal -->
	    <div class="modal fade" id="myModal" role="dialog" style="overflow-y: scroll;">
	     	<div class="modal-dialog">
	     		<!-- Modal content-->
	     		<div class="modal-content">
	     			<div class="modal-header">
	     				<button type="button" class="close" data-dismiss="modal">×</button>
	     				<h4><span class="glyphicon glyphicon-lock"></span> Register</h4>
	     			</div>
	     			<div class="modal-body">
	     				<form method="POST" id="registerRiderForm">
	     					<input type="hidden" name="joinRegister" id="joinRegister" value="false">
	     					<input type="hidden" name="joinRegisterTripID" id="joinRegisterTripID" value="0">
	     					<div class="form-group">
	     						<label for="fname"><span class="glyphicon glyphicon-shopping-cart"></span> First Name</label>
	     						<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="lname"><span class="glyphicon glyphicon-shopping-cart"></span> Last Name</label>
	     						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="lname"><span class="glyphicon glyphicon-shopping-cart"></span> User Name</label>
	     						<input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="mobileNo"><span class="glyphicon glyphicon-user"></span> MobileNo</label>
	     						<input type="number" class="form-control" id="mobileNo" name="mobileNo" placeholder="Mobile No" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="email"><span class="glyphicon glyphicon-shopping-cart"></span> Email</label>
	     						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="address"><span class="glyphicon glyphicon-shopping-cart"></span> Address</label>
	     						<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
	     					</div>
	     					<div class="form-group">
	     						<label for="password"><span class="glyphicon glyphicon-shopping-cart"></span> Password</label>
	     						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
	     					</div>
	     					<button type="button" class="btn btn-block" onclick="registerRider();">Submit 
	     						<span class="glyphicon glyphicon-ok"></span>
	     					</button>
	     				</form>
	     			</div>
	     			<div class="modal-footer">
	     				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
	     					<span class="glyphicon glyphicon-remove"></span> Cancel
	     				</button>
	     				<!-- <p>Need <a href="#">help?</a></p> -->
	     			</div>
	     		</div>
	     	</div>
	    </div>

	    <!-- Modal Join -->
	    <div class="modal fade" id="modalJoinTrip" role="dialog">
	    	<div class="modal-dialog">
	    		<!-- Modal content-->
	    		<div class="modal-content">
	    			<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal">×</button>
	    				<h4><span class="glyphicon glyphicon-lock"></span> Join</h4>
	    			</div>
	    			<div class="modal-body">
	    				<form method="POST" id="joinTripForm">
	    					<input type="hidden" name="tripID" id="tripID">
	    					<div class="form-group">
	    						<label for="fname"><span class="glyphicon glyphicon-shopping-cart"></span> First Name</label>
	    						<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
	    					</div>
	    					<div class="form-group">
	    						<label for="lname"><span class="glyphicon glyphicon-shopping-cart"></span> Last Name</label>
	    						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
	    					</div>
	    					<div class="form-group">
	    						<label for="mobileNo"><span class="glyphicon glyphicon-user"></span> MobileNo</label>
	    						<input type="number" class="form-control" id="mobileNo" name="mobileNo" placeholder="Mobile No" required>
	    					</div>
	    					<div class="form-group">
	    						<label for="email"><span class="glyphicon glyphicon-shopping-cart"></span> Email</label>
	    						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
	    					</div>
	    					<div class="form-group">
	    						<label for="address"><span class="glyphicon glyphicon-shopping-cart"></span> Address</label>
	    						<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
	    					</div>
	    					<div class="form-group">
	    						<label for="password"><span class="glyphicon glyphicon-shopping-cart"></span> Password</label>
	    						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
	    					</div>
	    					<button type="button" class="btn btn-block" onclick="joinTripForm();">Submit 
	    						<span class="glyphicon glyphicon-ok"></span>
	    					</button>
	    				</form>
	    			</div>
	    			<div class="modal-footer">
	    				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
	    					<span class="glyphicon glyphicon-remove"></span> Cancel
	    				</button>
	    				<!-- <p>Need <a href="#">help?</a></p> -->
	    			</div>
	    		</div>
	    	</div>
	    </div>

	    <!-- Modal Are You already a member -->
	    <div class="modal fade" id="alreadyMember" role="dialog">
	    	<div class="modal-dialog">
	    		<!-- Modal content-->
	    		<div class="modal-content">
	    			<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal">×</button>
	    				<h4><span class="glyphicon glyphicon-lock"></span> Join</h4>
	    			</div>
	    			<div class="modal-body">
	    				<div class="form-group">
	    					<!-- <label for="password"><span class="glyphicon glyphicon-shopping-cart"></span> Are You a Member ? </label> -->
	    					<!-- <input type="password" class="form-control" id="password" name="password" placeholder="Password" required> -->
	    					<font align="center">Are You a Member ? </font>
	    				</div>
	    			</div>
	    			<div class="modal-footer">
	    				<!-- data-dismiss="modal" data-toggle="modal" href="#lost" -->
	    				<button type="button" class="btn btn-danger btn-default pull-left" onclick="registerModelOpen();">
	    					<span class="glyphicon glyphicon-remove"></span> No
	    				</button>
	    				<!-- <button type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal" data-toggle="modal" href="#myModal">
	    					<span class="glyphicon glyphicon-remove"></span> No
	    				</button> -->

	    				<button type="submit" class="btn btn-danger btn-default pull-right " data-dismiss="modal" data-toggle="modal" href="#joinTripLogin">
	    					<span class="glyphicon glyphicon-ok" ></span> Yes
	    				</button>
	    				<!-- <p>Need <a href="#">help?</a></p> -->
	    			</div>
	    		</div>
	    	</div>
	    </div>

	    <!-- joinTripLogin modal -->
	    <div class="modal fade" id="joinTripLogin" role="dialog">
	    	<div class="modal-dialog">
	    		<!-- Modal content-->
	    		<div class="modal-content">
	    			<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal">×</button>
	    				<h4><span class="glyphicon glyphicon-lock"></span> Join</h4>
	    			</div>
	    			<div class="modal-body">
	    				<form method="POST" id="joinTripLoginForm">
		    				<div class="form-group">
		    					<label for="password"><span class="glyphicon glyphicon-shopping-cart"></span> Email</label>
		    					<input type="test" class="form-control" id="email" name="email" placeholder="Email" required>
		    				</div>
		    				<div class="form-group">
		    					<label for="password"><span class="glyphicon glyphicon-shopping-cart"></span> Password</label>
		    					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		    				</div>
		    			</form>
	    			</div>
	    			<div class="modal-footer">
	    				<button type="button" class="btn btn-danger btn-default pull-right" onclick="joinTripLogin();">
	    					<span class="glyphicon glyphicon-ok" ></span> join
	    				</button>
	    				<!-- <p>Need <a href="#">help?</a></p> -->
	    			</div>
	    		</div>
	    	</div>
	    </div>

 	</div>
 	<!-- Container (Contact Section) -->
      <!-- <div id="contact" class="container">
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
     </div> -->
      <!--
         <div id="googleMap"></div>
         
         <script src="https://maps.googleapis.com/maps/api/js"></script>
         <script>
         var myCenter = new google.maps.LatLng(41.878114, -87.629798);
         
         function initialize() {
         var mapProp = {
         center:myCenter,
         zoom:12,
         scrollwheel:false,
         draggable:false,
         mapTypeId:google.maps.MapTypeId.ROADMAP
         };
         
         var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
         
         var marker = new google.maps.Marker({
         position:myCenter,
         });
         
         marker.setMap(map);
         }
         
         google.maps.event.addDomListener(window, 'load', initialize);
         </script>
     -->
     <!-- Footer -->
     <?php
     	$this->load->view('common/footer');
     ?>
     <!-- //Footer -->
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
		function getTimeRemaining(endtime) {
			var t = Date.parse(endtime) - Date.parse(new Date());
			var seconds = Math.floor((t / 1000) % 60);
			var minutes = Math.floor((t / 1000 / 60) % 60);
			var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
			var days = Math.floor(t / (1000 * 60 * 60 * 24));
			return {
				'total': t,
				'days': days,
				'hours': hours,
				'minutes': minutes,
				'seconds': seconds
			};
		}

		function initializeClock(id, endtime) {
			var clock = document.getElementById(id);
			var daysSpan = clock.querySelector('.days');
			var hoursSpan = clock.querySelector('.hours');
			var minutesSpan = clock.querySelector('.minutes');
			var secondsSpan = clock.querySelector('.seconds');

			function updateClock() {
				var t = getTimeRemaining(endtime);

				daysSpan.innerHTML = t.days;
				hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
				minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
				secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

				if (t.total <= 0) {
					clearInterval(timeinterval);
				}
			}

			updateClock();
			var timeinterval = setInterval(updateClock, 1000);
		}

		// var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
		var deadline = new Date("April 15, 2017 09:00:00");
		// console.log(deadline);
		initializeClock('clockdiv', deadline);
	</script>

   	<script type="text/javascript">
   		function enterPassword(){

   			var password = $('#password').val();
   			var confirmPassword = $('#confirmPassword').val();
            //passwordDontMatchDiv

            if(confirmPassword!=password){
                   //border: 1px solid #dc1010;
                   $('#password').css('border','1px solid #dc1010');
                   $('#confirmPassword').css('border','1px solid #dc1010');
                   $('#passwordErrorMsg').css('display','block');
               }else{
               	var form = $('#enterNewPasswordForm')[0]; 
               	var formData = new FormData(form);
               // for (var [key, value] of formData.entries()) { 
               //     console.log(key, value);
               // }
               	$.ajax({
	               	url:  "<?php echo site_url(''); ?>/api/doEnterNewPassword",
	               	type: "POST",
	               	data:  formData,
	               	contentType: false,
	               	cache: false,
	               	processData:false,

	               	beforeSend: function() {
	               		$("#displayLoader").css('display','block');
	               	},

	               	success: function(data){
               		var objJson = JSON.parse(data);
               		if (objJson.txtsuccess == false) {
               			console.log(objJson.txtsuccess);
               		} else if (objJson.txtsuccess == true) {
               			console.log(objJson.txtsuccess);
               			window.location = "<?php echo site_url(''); ?>/api/passwordUpdatedSuccessFully";
                           // window.location="http://www.tutorialspoint.com";
                       }
                   },

                   error: function(){
                   	alert('please try again');
                   }
               	});
           }

       	}
   	</script>

   	<script type="text/javascript">
   		function registerModelOpen() {

   			$('#joinRegister').val('true');
   			$('#alreadyMember').modal('hide');
   			$('#myModal').modal('show');
   		}

   		function registerRider() {
   			var form = $('#registerRiderForm')[0]; 
            var formData = new FormData(form);
   			$.ajax({
   				url:  "<?php echo site_url(''); ?>/home/registerRider",
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
   					if (objJson.status == 0) {
   						alert(objJson.message);
   					} else if (objJson.status == 1) {
   						$('#myModal').modal('hide');
   						// alert(objJson.status);

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


   	<script type="text/javascript">
   		function joinTripModal(tripID) {
   			$('#tripID').val(tripID);
   			console.log(tripID);
   			$('#modalJoinTrip').modal('show');
   		}
   	</script>

   	<script type="text/javascript">
   		function alreadyMember(tripID) {
   			$('#joinRegisterTripID').val(tripID);
   			// alreadyMember
   			$('#alreadyMember').modal('show');
   		}
   		function joinTripForm() {
   			var form = $('#joinTripForm')[0]; 
            var formData = new FormData(form);
   			$.ajax({
   				url:  "<?php echo site_url(''); ?>/home/joinTrip",
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
   						alert(objJson.txtsuccess);
   					} else if (objJson.txtsuccess == true) {
   						$('#modalJoinTrip').modal('hide');
   						alert(objJson.txtsuccess);

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

   	<script type="text/javascript">
   		function joinTripLogin() {
   			var form = $('#joinTripLoginForm')[0]; 
            var formData = new FormData(form);
   			$.ajax({
   				url:  "<?php echo site_url(''); ?>/home/joinTripLogin",
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
   					if (objJson.status == 0) {
   						alert(objJson.message);
   					} else if (objJson.status == 1) {
   						$('#joinTripLogin').modal('hide');
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