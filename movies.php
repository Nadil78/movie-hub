<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch movies from the database
$sql = "SELECT id, title, genre, rating, image_url FROM movies";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Movies List</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Movies List</h1>
        <div class="movie-list">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="movie-card">';
                    echo '<div class="movie-thumbnail">';
                    echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '">';
                    echo '<button class="play-btn">&#9658;</button>';
                    echo '</div>';
                    echo '<div class="movie-info">';
                    echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                    echo '<p>Genre: ' . htmlspecialchars($row['genre']) . ' | Rating: ' . htmlspecialchars($row['rating']) . '/10</p>';
                    echo '<a href="booking.php?movie_id=' . htmlspecialchars($row['id']) . '" class="booking-btn">Booking</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No movies found.</p>';
            }
            ?>
        </div>
    </main>

    <footer>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">About</a></li>
                <li><a href="about.html">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
