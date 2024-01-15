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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Create a separate CSS file for styling -->
    
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
        /* Style for the navigation bar */
        .navbar {
            background-color: black;
            overflow: hidden;
            color: white;
        }
        
        .logo-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .navbar .logo {
            float: left;
        }
        
        .navbar .nav-links {
            float: right;
        }
        
        .navbar .nav-links a {
            display: inline-block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            color: white;
        }
        
        .navbar .nav-links a:hover {
            background-color: #333; /* Darker background on hover */
        }
        
        .navbar .we-help {
            float: right;
        }
        
        body {
            background-image: url('clean_service.webp'); /* Add your background image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Prevent background from scrolling */
            /* filter: blur(5px); /* Apply blur effect to the background image */
        }
        
        .content-container {
            position: relative;
        }
        
        .navbar-nav smooth-scroll {
            scroll-behavior: smooth;
        }
        
        .logo-img {
            position: absolute;
            top: 5px;
            left: 150px;
            width: 50px;
            height: 50px;
        }
        
        .transparent-box {
            background: rgba(0, 0, 0, 0.686); /* White transparent box */
            position: absolute;
            top: 150px; /* Adjust this value as needed */
            left: 33%; /* Add 33% padding to the left */
            transform: translateX(-50%);
            padding: 20px;
            height: auto;
            width: 400px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 20px;
            color: #ffffff;
            z-index: 1; /* Set a higher z-index to bring it to the front */
        }
        
        .category {
            cursor: pointer;
            color: #f1f0f0;
            font-size: large;
        }
        
        .category:hover {
            color: rgb(0, 0, 0);
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 2; /* Set a higher z-index to bring it to the front */
        }
        h3{
            color:white;
        }
        .navbar .we-help {
            float: right;
        }
        .navbar-brand{
            margin-left: 200px;
        }
    </style>
</head>

<body>
<div class="navbar">
    <a class="navbar-brand" href="#">
        <img src="sitelogo.png" alt="BookMyBai" class="logo-img">
        <span class="we-help">We-Help</span>
    </a>
    
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="maid-hiring.php">Find a Maid</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="admin/login.php">Admin</a>
        <a href="maid_service.php">Services</a>
    </div>
</div>



<div class="content-container">
    <div class="transparent-box">
        <h3>Types of our Cleaning Service Category</h3>
        <hr>
        <!-- Clickable Categories -->
        <a href="#" class="category">Dusting</a>
        <hr>
        <a href="#" class="category">Floor Cleaning</a>
        <hr>
        <a href="#" class="category">Clothes Washing</a>
        <hr>
        <a href="#" class="category">Utensils Washing</a>
        <hr>
        <a href="#" class="category">Balcony Cleaning</a>
        <hr>
        <a href="#" class="category">Bathroom Cleaning</a>
        <hr>
        <a href="#" class="category">Full Home Cleaning</a>
        <hr>
        <a href="clean_detail.php" class="btn btn-primary">Find a maid</a>
    </div>
</div>

<!-- <div class="footer"> -->
    <!-- Footer content goes here -->
<!-- </div> -->



<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
