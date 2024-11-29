<?php
// Database connection
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "movie_hub"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_user'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $role = $_POST['role'];
        $sql = "INSERT INTO users (username, password, email, role) VALUES ('$username', '$password', '$email', '$role')";
        $conn->query($sql);
    } elseif (isset($_POST['delete_user'])) {
        $id = $_POST['user_id'];
        $sql = "DELETE FROM users WHERE id=$id";
        $conn->query($sql);
    } elseif (isset($_POST['edit_user'])) {
        $id = $_POST['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        // If a new password is provided, update it; otherwise, keep the existing one
        $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $_POST['existing_password'];
        $sql = "UPDATE users SET username='$username', password='$password', email='$email', role='$role' WHERE id=$id";
        $conn->query($sql);
    }
}

// Fetch all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .content-container {
            margin-left: 200px;
            padding: 20px;
            background-color: #ffffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="content-container">
    <h2>Manage Users</h2>

    <!-- Add User Form -->
    <div class="form-container">
        <h3>Add New User</h3>
        <form method="post" action="manage_users.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br><br>
            <button type="submit" name="add_user" class="w3-button w3-green">Add User</button>
        </form>
    </div>

    <!-- User Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                
                    <td>
                        <!-- Edit User Form -->
                        <button class="w3-button w3-yellow w3-small" onclick="document.getElementById('editForm<?php echo $row['id']; ?>').style.display='block'">Edit</button>
                        <!-- Delete User Form -->
                        <form method="post" style="display:inline;" action="manage_users.php">
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_user" class="w3-button w3-red w3-small">Delete</button>
                        </form>

                        <!-- Edit Form (Hidden by default) -->
                        <div id="editForm<?php echo $row['id']; ?>" class="w3-modal" style="display: none;">
                            <div class="w3-modal-content w3-card-4">
                                <header class="w3-container w3-teal">
                                    <span onclick="document.getElementById('editForm<?php echo $row['id']; ?>').style.display='none'"
                                    class="w3-button w3-display-topright">&times;</span>
                                    <h2>Edit User</h2>
                                </header>
                                <div class="w3-container">
                                    <form method="post" action="manage_users.php">
                                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="existing_password" value="<?php echo htmlspecialchars($row['password']); ?>">
                                        <label for="username">Username:</label>
                                        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required><br><br>
                                        <label for="password">New Password (leave blank to keep current password):</label>
                                        <input type="password" id="password" name="password"><br><br>
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
                                        <label for="role">Role:</label>
                                        <select id="role" name="role" required>
                                            <option value="admin" <?php if ($row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                                            <option value="user" <?php if ($row['role'] == 'user') echo 'selected'; ?>>User</option>
                                        </select><br><br>
                                        <button type="submit" name="edit_user" class="w3-button w3-green">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    // Close the modal when clicking outside
    window.onclick = function(event) {
        var modals = document.getElementsByClassName('w3-modal');
        for (var i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                modals[i].style.display = "none";
            }
        }
    }
</script>

</body>
</html>

<?php
$conn->close();
?>
