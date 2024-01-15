<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// The code below is for the dashboard content. You can customize this part.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Your head section remains the same ... -->
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Dashboard</h1>
        <p>Welcome, <?php echo $_SESSION["username"]; ?>! You are now logged in.</p>
        <a href="logout.php" class="btn btn-primary">Logout</a>
        <!-- ... Your dashboard content goes here ... -->
    </div>
    <!-- ... Rest of your HTML code remains the same ... -->
</body>
</html>
