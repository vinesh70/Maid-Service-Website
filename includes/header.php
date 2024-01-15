<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the navigation bar */
        .navbar {
            background-color: black;
            overflow: hidden;
            color: white;
            height: 5%;
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
    </style>
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
        <a href="user_signup.php">Signup</a>
        <a href="login.php">Login</a>
    </div>
</div>

</body>
</html>
