<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Servify</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
         body {
         font: 400 15px/1.8 Lato, sans-serif;
         color: #777;
         }
         h3, h4 {
         margin: 10px 0 30px 0;
         letter-spacing: 10px;      
         font-size: 20px;
         color: #111;
         }
         .container {
         padding: 80px 120px;
         }
         .person {
         border: 10px solid transparent;
         margin-bottom: 25px;
         width: 80%;
         height: 80%;
         opacity: 0.7;
         }
         .person:hover {
         border-color: #f1f1f1;
         }
         .carousel-inner img {
         -webkit-filter: grayscale(90%);
         filter: grayscale(90%); /* make all photos black and white */ 
         width: 100%; /* Set width to 100% */
         margin: auto;
         }
         .carousel-caption h3 {
         color: #fff !important;
         }
         @media (max-width: 600px) {
         .carousel-caption {
         display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
         }
         }
         .bg-1 {
         background: #2d2d30;
         color: #bdbdbd;
         }
         .bg-1 h3 {color: #fff;}
         .bg-1 p {font-style: italic;}
         .list-group-item:first-child {
         border-top-right-radius: 0;
         border-top-left-radius: 0;
         }
         .list-group-item:last-child {
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         }
         .thumbnail {
         padding: 0 0 15px 0;
         border: none;
         border-radius: 0;
         }
         .thumbnail p {
         margin-top: 15px;
         color: #555;
         }
         .btn {
         padding: 10px 20px;
         background-color: #333;
         color: #f1f1f1;
         border-radius: 0;
         transition: .2s;
         }
         .btn:hover, .btn:focus {
         border: 1px solid #333;
         background-color: #fff;
         color: #000;
         }
         .modal-header, h4, .close {
         background-color: #333;
         color: #fff !important;
         text-align: center;
         font-size: 30px;
         }
         .modal-header, .modal-body {
         padding: 40px 50px;
         }
         .nav-tabs li a {
         color: #777;
         }
         #googleMap {
         width: 100%;
         height: 400px;
         -webkit-filter: grayscale(100%);
         filter: grayscale(100%);
         }  
         .navbar {
         font-family: Montserrat, sans-serif;
         margin-bottom: 0;
         background-color: #2d2d30;
         border: 0;
         font-size: 11px !important;
         letter-spacing: 4px;
         opacity: 0.9;
         }
         .navbar li a, .navbar .navbar-brand { 
         color: #d5d5d5 !important;
         }
         .navbar-nav li a:hover {
         color: #fff !important;
         }
         .navbar-nav li.active a {
         color: #fff !important;
         background-color: #29292c !important;
         }
         .navbar-default .navbar-toggle {
         border-color: transparent;
         }
         .open .dropdown-toggle {
         color: #fff;
         background-color: #555 !important;
         }
         .dropdown-menu li a {
         color: #000 !important;
         }
         .dropdown-menu li a:hover {
         background-color: red !important;
         }
         footer {
         background-color: #2d2d30;
         color: #f5f5f5;
         padding: 32px;
         }
         footer a {
         color: #f5f5f5;
         }
         footer a:hover {
         color: #777;
         text-decoration: none;
         }  
         .form-control {
         border-radius: 0;
         }
         textarea {
         resize: none;
         }
      </style>
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
      <!-- Demo styles -->
      <style>
         html, body {
         position: relative;
         height: 100%;
         }
         body {
         background: #eee;
         font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
         font-size: 14px;
         color:#000;
         margin: 0;
         padding: 0;
         }
         .swiper-container {
         width: 100%;
         height: 100%;
         margin-left: auto;
         margin-right: auto;
         }
         .swiper-slide {
         text-align: center;
         font-size: 18px;
         background: #fff;
         /* Center slide text vertically */
         display: -webkit-box;
         display: -ms-flexbox;
         display: -webkit-flex;
         display: flex;
         -webkit-box-pack: center;
         -ms-flex-pack: center;
         -webkit-justify-content: center;
         justify-content: center;
         -webkit-box-align: center;
         -ms-flex-align: center;
         -webkit-align-items: center;
         align-items: center;
         }
         /* ############# custom CSS ########### */
         .spotHolder{
         height:400px;
         }
         #sliderSpot1{
         background-image: url("<?php echo base_url(); ?>assets/img/Dream_Rider_Bike_7.JPG.webp");
         }
         #sliderSpot2{
         background-image: url("<?php echo base_url(); ?>assets/img/road.jpg");
         }
         #sliderSpot3{
         background-image: url("<?php echo base_url(); ?>assets/img/slider3.jpg");
         }
      </style>
      }
   </head>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="#myPage">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#myPage">HOME</a></li>
                  <li><a href="#tour">RIDING-RULES</a></li>
                  <li><a href="#band">ABOUT</a></li>
                  <li><a href="#tour">CONTACT</a></li>
                  <!-- <li><a href="#contact">CONTACT</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                     </ul>
                  </li> -->
                  <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
               </ul>
            </div>
         </div>
      </nav>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!--**** Sportloght **** -->
         <!-- Swiper -->
         <div class="spotHolder">
            <div class="swiper-container">
               <div class="swiper-wrapper">
                  <div class="swiper-slide" id="sliderSpot1">Slide 1</div>
                  <div class="swiper-slide" id="sliderSpot2">Slide 2</div>
                  <div class="swiper-slide" id="sliderSpot3">Slide 3</div>
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
            <div class="col-sm-6">
               <p class="text-center"><strong>Next Ride Counter</strong></p>
               <br>

               <!-- <a href="#demo" data-toggle="collapse">
               <img src="<?php echo base_url(); ?>assets/img/bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a> -->
               <!-- <div id="demo" class="collapse">
                  <p>Guitarist and Lead Vocalist</p>
                  <p>Loves long walks on the beach</p>
                  <p>Member since 1988</p>
               </div> -->
            </div>
            <div class="col-sm-6">
               <p class="text-center"><strong>Ongoing</strong></p>
               <br>
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
                  <div class="thumbnail">
                     <img src="<?php echo base_url(); ?>assets/img/royalGroupStanding.jpg" alt="Paris" width="400" height="300">
                     <p><strong>Member Benefits</strong></p>
                     <p>Free Shirts</p>
                     <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="thumbnail">
                     <!-- <p><strong>Raigad</strong></p>
                     <p>24/01/2017</p> -->
                     <img src="<?php echo base_url(); ?>assets/img/newyork.jpg" alt="New York" width="400" height="300">
                     <p><strong>Raigad</strong></p>
                     <p>24/01/2017</p>
                     <!-- <br> -->
                     <button class="btn" data-toggle="modal" data-target="#modalJoin">Join</button>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="thumbnail">
                     <img src="<?php echo base_url(); ?>assets/img/sanfran.jpg" alt="San Francisco" width="400" height="300">
                     <p><strong>Leh</strong></p>
                     <p>19/05/2017</p>
                     <button class="btn" data-toggle="modal" data-target="#modalJoin">Join</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Register -->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4><span class="glyphicon glyphicon-lock"></span> Register</h4>
                  </div>
                  <div class="modal-body">
                     <form method="POST" action="<?php echo site_url(''); ?>/home/registerRider">
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
                        <button type="submit" class="btn btn-block">Submit 
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
         <div class="modal fade" id="modalJoin" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4><span class="glyphicon glyphicon-lock"></span> Join</h4>
                  </div>
                  <div class="modal-body">
                     <form method="POST" action="<?php echo site_url(''); ?>/home/registerRider">
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
                        <button type="submit" class="btn btn-block">Submit 
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
      <footer class="text-center">
         <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
         <span class="glyphicon glyphicon-chevron-up"></span>
         </a><br><br>
         <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
      </footer>
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

      <!-- <script type="text/javascript">
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
      </script> -->
   </body>
</html>