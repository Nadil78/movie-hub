<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_hub";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $site_name = $_POST['site_name'];
    $admin_email = $_POST['admin_email'];
    $contact_phone = $_POST['contact_phone'];

    $sql = "UPDATE site_settings SET site_name=?, admin_email=?, contact_phone=? WHERE id=1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $site_name, $admin_email, $contact_phone);

    if ($stmt->execute()) {
        $message = "Settings updated successfully.";
    } else {
        $message = "Error updating settings: " . $conn->error;
    }

    $stmt->close();
}

// Fetch current settings
$sql = "SELECT site_name, admin_email, contact_phone FROM site_settings WHERE id=1";
$result = $conn->query($sql);
$settings = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Settings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
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
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
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
        .message {
            margin: 15px 0;
            padding: 10px;
            color: #e74c3c;
            background-color: #f9d6d5;
            border: 1px solid #e74c3c;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Site Settings</h2>
    
    <?php if (!empty($message)): ?>
        <div class="message"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>

    <form action="site_settings.php" method="post">
        <label for="site_name">Site Name:</label>
        <input type="text" id="site_name" name="site_name" value="<?php echo htmlspecialchars($settings['site_name']); ?>" required>

        <label for="admin_email">Admin Email:</label>
        <input type="email" id="admin_email" name="admin_email" value="<?php echo htmlspecialchars($settings['admin_email']); ?>" required>

        <label for="contact_phone">Contact Phone:</label>
        <input type="text" id="contact_phone" name="contact_phone" value="<?php echo htmlspecialchars($settings['contact_phone']); ?>" required>

        <button type="submit">Save Changes</button>
    </form>
</div>

</body>
</html>
