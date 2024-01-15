<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Create a separate CSS file for styling -->
  <style>
    body {
      background-image: url('japamaid.jpg'); /* Add your background image path */
      background-size: cover;
      background-repeat: no-repeat;
      /*filter: blur(5px); /* Apply blur effect to the background image */ 
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
      top: 55%;
      left: 10%;
      transform: translate(-50%, -50%);
      padding: 10px;
      height:auto;
      width: 400px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 20px;
      color: #ffffff;
    }

    .category {
      /*background-color: rgba(255, 255, 255, 0.5); /* Background color for the category boxes */
      /*padding: 10px;
      margin: 10px;
      /*border-radius: 5px;*/
      text-align: center;
      cursor: pointer;
      color: #f1f0f0;
      font-size:large;
    }

    .category:hover {
      /*background-color: rgba(0, 0, 0, 0.7); /* Change background color on hover */
      color: rgb(255, 3, 3);
    }
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
            left: 20%; /* Add 33% padding to the left */
            transform: translateX(-50%);
            padding: 10px;
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
        .navbar-brand{
            margin-left: 200px;
        }
    </style>
  <title> Japa Services</title>
</head>
<body>
 
<div class="navbar">
    <a class="navbar-brand" href="#">
        <img src="sitelogo.png" alt="BookMyBai" class="logo-img">
        <span class="we-help">WeHelp</span>
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

  <div class="transparent-box">
    <h3>Types of our Japa Services</h3>
    <hr>
    <!-- Clickable Categories -->
    <a href="#" class="category">Baby Massage</a>
    <hr>
    <a href="#" class="category">Preparing Baby Food</a>
    <hr>
    <a href="#" class="category">Washing Baby Clothes</a>
    <hr>
    <a href="#" class="category">Mother Massage</a>
    <hr>
    <a href="#" class="category">Changing a diaper</a>
    <hr>
    <a href="b_maid_det.php" class="btn btn-primary" >Find a Japa Maid</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>