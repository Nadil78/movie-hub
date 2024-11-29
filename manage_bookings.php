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
    if (isset($_POST['add_booking'])) {
        $movie_id = $_POST['movie_id'];
        $user_id = $_POST['user_id'];
        $booking_date = $_POST['booking_date'];
        $sql = "INSERT INTO bookings (movie_id, user_id, booking_date) VALUES ('$movie_id', '$user_id', '$booking_date')";
        $conn->query($sql);
    } elseif (isset($_POST['delete_booking'])) {
        $id = $_POST['booking_id'];
        $sql = "DELETE FROM bookings WHERE id=$id";
        $conn->query($sql);
    }
}

// Fetch all bookings
$sql = "SELECT bookings.id, movies.title, users.username, bookings.booking_date 
        FROM bookings 
        JOIN movies ON bookings.movie_id = movies.id 
        JOIN users ON bookings.user_id = users.id";
$result = $conn->query($sql);

// Fetch movies and users for the add booking form
$movies = $conn->query("SELECT id, title FROM movies");
$users = $conn->query("SELECT id, username FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
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
    <h2>Manage Bookings</h2>

    <!-- Add Booking Form -->
    <div class="form-container">
        <h3>Add New Booking</h3>
        <form method="post" action="manage_bookings.php">
            <label for="movie_id">Movie:</label>
            <select id="movie_id" name="movie_id" required>
                <?php while ($row = $movies->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></option>
                <?php endwhile; ?>
            </select><br><br>
            <label for="user_id">User:</label>
            <select id="user_id" name="user_id" required>
                <?php while ($row = $users->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['username']); ?></option>
                <?php endwhile; ?>
            </select><br><br>
            <label for="booking_date">Booking Date:</label>
            <input type="date" id="booking_date" name="booking_date" required><br><br>
            <button type="submit" name="add_booking" class="w3-button w3-green">Add Booking</button>
        </form>
    </div>

    <!-- Bookings Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Movie</th>
                <th>User</th>
                <th>Booking Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                    <td>
                        <!-- Delete Booking Form -->
                        <form method="post" style="display:inline;" action="manage_bookings.php">
                            <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_booking" class="w3-button w3-red w3-small">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
