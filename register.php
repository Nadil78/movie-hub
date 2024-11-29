<?php
session_start();
include 'dbcon.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to the website after successful registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #e09, #d0e);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            display: flex;
            max-width: 900px;
            width: 100%;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
            background-color: #fff;
        }

        .left-section {
            background-color: #28a745;
            color: white;
            padding: 60px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .left-section h2 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .left-section p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .left-section button {
            width: 80%;
            padding: 15px;
            font-size: 1.2em;
            color: #fff;
            background-color: #1e7e34;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .left-section button:hover {
            background-color: #145a24;
        }

        .right-section {
            padding: 60px;
            width: 50%;
        }

        .right-section h3 {
            margin-bottom: 30px;
            color: #333;
            font-size: 2em;
            text-align: center;
        }

        .right-section label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        .right-section input[type="text"],
        .right-section input[type="password"],
        .right-section input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .right-section input[type="text"]:focus,
        .right-section input[type="password"]:focus,
        .right-section input[type="email"]:focus {
            border-color: #28a745;
            outline: none;
        }

        .right-section button {
            width: 100%;
            padding: 15px;
            font-size: 1.2em;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .right-section button:hover {
            background-color: #218838;
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .social-login a {
            color: #28a745;
            text-decoration: none;
            font-size: 1em;
            border: 1px solid #28a745;
            padding: 12px 20px;
            border-radius: 6px;
            text-align: center;
            flex: 1;
            margin: 0 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .social-login a:hover {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="left-section">
            <h2>Welcome Back!</h2>
            <p>To keep connected with us, please log in with your personal info</p>
            <button onclick="window.location.href='login.php';">Sign In</button>
        </div>
        <div class="right-section">
            <h3>Create Account</h3>
            <form action="register.php" method="post">
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Sign Up</button>
            </form>
            <div class="social-login">
                <a href="#">Facebook</a>
                <a href="#">Google</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </div>
</body>
</html>
