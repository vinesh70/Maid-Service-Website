<?php
session_start();

include('includes/dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrUsername = $_POST["emailOrUsername"];
    $userPassword = $_POST["password"];

    // Create a database connection
    $conn = new mysqli($server, $username, $db_password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the user exists
    $query = "SELECT * FROM users WHERE (email = '$emailOrUsername' OR username = '$emailOrUsername')";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verify the password using password_verify
        if (password_verify($userPassword, $row["password"])) {
            // User found and password is correct, log them in
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $emailOrUsername;
            // Redirect to the user's dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect
            $error = "Invalid password. Please try again.";
        }
    } else {
        // User not found
        $error = "User not found. Please try again.";
    }

    error_reporting(E_ALL);
ini_set('display_errors', 1);


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(120deg, #f8f9fa, #e2e3e5);
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #ff4141;
            border-color: #ff4141;
        }
        .alert {
            margin-top: 20px;
        }
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Hello, Welcome Back!<br>Login to Our Website</h1>
        <!-- Display error message if login fails -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form method="post">
            <!-- Email or Username -->
            <div class="mb-3">
                <label for="emailOrUsername" class="form-label">Email ID or Username</label>
                <input type="text" class="form-control" id="emailOrUsername" name="emailOrUsername" placeholder="Enter your Email-ID or Username" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a secure password" required>
            </div>

            <div class="d-grid gap-2">
                <button type="reset" class="btn btn-primary">Reset</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <!-- ... Rest of your HTML code remains the same ... -->
</body>
</html>
