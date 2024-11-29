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

// SQL query to get booking details
$sql = "SELECT bookings.id, movies.title AS movie_title, users.username AS user_name, bookings.booking_date
        FROM bookings
        JOIN movies ON bookings.movie_id = movies.id
        JOIN users ON bookings.user_id = users.id
        ORDER BY bookings.booking_date DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Booking Reports</h2>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Movie Title</th>
                <th>User Name</th>
                <th>Booking Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['movie_title']); ?></td>
                        <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No bookings found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>

</body>
</html>
