<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['register'])) {
        // Get user input
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $ustate = $_POST['ustate'];
        $u_city = $_POST['u_city'];
        $u_address = $_POST['u_address'];
        $u_area = $_POST['u_area'];
        $u_landmark = $_POST['u_landmark'];
        $u_pincode = $_POST['u_pincode'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        // Check if password and confirmed password match
        $cpassword = $_POST['cpassword'];
        if ($_POST['password'] !== $cpassword) {
            echo "Password and confirmed password do not match.";
            exit; // Exit the script
        }

        // Validate and sanitize input as needed

        // Prepare and execute the SQL query
        $query = "INSERT INTO users (name, phoneno, ustate, u_city, u_address, u_area, u_landmark, u_pincode, email, username, password) 
                  VALUES (:name, :phoneno, :ustate, :u_city, :u_address, :u_area, :u_landmark, :u_pincode, :email, :username, :password)";
        
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phoneno', $phoneno);
        $stmt->bindParam(':ustate', $ustate);
        $stmt->bindParam(':u_city', $u_city);
        $stmt->bindParam(':u_address', $u_address);
        $stmt->bindParam(':u_area', $u_area);
        $stmt->bindParam(':u_landmark', $u_landmark);
        $stmt->bindParam(':u_pincode', $u_pincode);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            echo "Registration Successful!";
            // You can also redirect the user to a login page here.
        } else {
            echo "Registration failed. Please try again.";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    error_log("PDO Error: " . $e->getMessage());
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #f3f7fb;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 70%;
            margin: 0 auto;
            margin-top: 50px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .btn-group button {
            flex: 1;
            margin-right: 10px;
        }
        .btn-group button:last-child {
            margin-right: 0;
        }
        .btn-primary {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            width: 48%;
        }
        .btn-secondary {
            background-color: #f3f3f3;
            border-color: #f3f3f3;
            width: 48%;
        }
        .btn-primary:hover {
            background-color: #ff4141;
            border-color: #ff4141;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Hello User<br>Signup to our Website!</h1>
        <form method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Full Name" aria-describedby="emailHelp" required>
            </div>

            <!-- Phone number -->
            <div class="mb-3">
                <label for="phoneno" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="phoneno" name="phoneno" placeholder="Enter your 10 Digit Mobile Number" aria-describedby="emailHelp" required>
            </div>

            <!-- State -->
            <div class="mb-3">
                <label for="u_state" class="form-label">State</label>
                <select class="form-select" id="u_state" name="ustate" required>
                    <option value="" selected disabled>Select your State</option>
                    <option value="maharashtra">Maharashtra</option>
                    <option value="gujarat">Gujarat</option>
                    <option value="kerela">Kerela</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="andrapradesh">Andhra Pradhesh</option>
                    <option value="westbengal">West Bengal</option>
                    <option value="Punjab & Haryana">Punjab & Haryana</option>
                </select>
            </div>

            <!-- City -->
            <div class="mb-3">
                <label for="u_city" class="form-label">City</label>
                <input type="text" class="form-control" id="u_city" name="u_city" placeholder="Enter your city" aria-describedby="emailHelp" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for "u_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="u_address" name="u_address" placeholder="Enter your Full Address" aria-describedby="emailHelp" required>
            </div>

            <!-- Area -->
            <div class="mb-3">
                <label for="u_area" class="form-label">Area</label>
                <input type="text" class="form-control" id="u_area" name="u_area" placeholder="Enter your Area Name" aria-describedby="emailHelp" required>
            </div>

            <!-- Landmark -->
            <div class="mb-3">
                <label for="u_landmark" class="form-label">Landmark (Optional)</label>
                <input type="text" class="form-control" id="u_landmark" name="u_landmark" placeholder="Enter landmark if any" aria-describedby="emailHelp">
            </div>

            <!-- Pincode -->
            <div class="mb-3">
                <label for="u_pincode" class="form-label">PinCode</label>
                <input type="number" class="form-control" id="u_pincode" name="u_pincode" placeholder="Enter your 7 digit pincode" aria-describedby="emailHelp" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your existing Email-ID" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter an unique username" aria-describedby="emailHelp" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a secure password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter a secure password again" required>
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>
            </div>

            <div class="btn-group">
                <button type="reset" class="btn btn-primary">Reset</button>
                <button type="submit" class="btn btn-primary" name="register">Signup</button>
                <a href="login.php" class="btn btn-primary">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
