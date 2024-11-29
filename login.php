<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Forms</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f9f9f9; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 600px;
        }

        .login-form {
            background-color: #ffffff; 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            border: 2px solid #28a745; 
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555; 
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #28a745; 
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            color: #fff;
            background-color: #28a745; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838; 
        }

        .error {
            color: #e74c3c; 
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Admin Login Form -->
        <div class="login-form">
            <h2>Admin Login</h2>
            <form action="admin dashboard.php" method="post">
                <label for="admin-username">Username:</label>
                <input type="text" id="admin-username" name="username" required>
                <label for="admin-password">Password:</label>
                <input type="password" id="admin-password" name="password" required>
                <button type="submit" name="admin_login">Login</button>
                <?php if (!empty($admin_error_message)): ?>
                    <p class="error"><?php echo htmlspecialchars($admin_error_message); ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
