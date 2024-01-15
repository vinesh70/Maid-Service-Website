<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        
         <title>Maid Hiring Management System || Home Page </title>
        
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <style>
                .S3 {
                    display: left;

                }
                p{
                    color:black;
                    font-size: 30px;

                }
            </style>
   </head>

   <body>
   <?php include_once('includes/header.php');?>
   <section class="scrollable-images">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="scrollable1.png" class="d-block w-100" alt="Image 1">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Welcome to WeHelp Website</h5> -->
            <p>Welcome to WeHelp Website</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="scrollable2.jpg" class="d-block w-100" alt="Image 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Get Best Home Services at an Affordable Price</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="scrollable3.jpg" class="d-block w-100" alt="Image 3">
          <div class="carousel-caption d-none d-md-block">
            <h5><a href="maid_service.php"> Start Searching Skilled workers now </a></h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button"
        data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <br> <br> <br>
   <center> <h2>How does it work?</h2> </center>
   <br>
   <center> <img src="S17.png" width="1000"> </center>

  <br> <br>
   <center> <h2>What we offer?</h2> </center>

  <center> <img src="S11.png" > </center>
<br> <br>
  <center> <h2>Difference between other maid agencies and WeHelp</h2> </center>

  <br> <br>

    <p style="margin-left: 230px">
    Other Maid Agencies  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WeHelp
    </p>
    

  <!-- <h3 style="margin-left: 220px"> Other Maid Agencies <h3>

   <h3 style="margin-left: 220px"> WeHelp <h3> -->

  <center> <img src="S4.png" width="1000"> </center>

  <br> <br>
   <center> <h2>Why use WeHelp</h2> </center>

   <center> <img src="S2.png"> </center>

   <br> <br>
   <div class="S3">
   <img src="S3.png" width="1350">
   </div>

  <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" >
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Looking To Hire A Maid? </h1>

                                    </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
    </main>

    <section class="hero">
      <div class="container">
        <h2>Find Reliable and Trusted Maid Services</h2>
        <p>WeHelp Website helps you connect with professional and experienced maids
          for all your household needs.</p>
        <a href="maid-hiring.php" class="btn btn-primary">Upload Requirements</a>
      </div>
    </section>

    <br> <br> <br> <br> <br> <br>
    <?php include_once('includes/footer.php');?>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>

