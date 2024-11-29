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
    if (isset($_POST['add_movie'])) {
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $sql = "INSERT INTO movies (title, genre, ) VALUES ('$title', '$genre', '$')";
        $conn->query($sql);
    } elseif (isset($_POST['delete_movie'])) {
        $id = $_POST['movie_id'];
        $sql = "DELETE FROM movies WHERE id=$id";
        $conn->query($sql);
    } elseif (isset($_POST['edit_movie'])) {
        $id = $_POST['movie_id'];
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $sql = "UPDATE movies SET title='$title', genre='$genre',  WHERE id=$id";
        $conn->query($sql);
    }
}

// Fetch all movies
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Movies</title>
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
    <h2>Manage Movies</h2>

    <!-- Add Movie Form -->
    <div class="form-container">
        <h3>Add New Movie</h3>
        <form method="post" action="manage_movies.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br><br>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" required><br><br>
            <button type="submit" name="add_movie" class="w3-button w3-green">Add Movie</button>
        </form>
    </div>

    <!-- Movie Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td>
                        <!-- Edit Movie Form -->
                        <button class="w3-button w3-yellow w3-small" onclick="document.getElementById('editForm<?php echo $row['id']; ?>').style.display='block'">Edit</button>
                        <!-- Delete Movie Form -->
                        <form method="post" style="display:inline;" action="manage_movies.php">
                            <input type="hidden" name="movie_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_movie" class="w3-button w3-red w3-small">Delete</button>
                        </form>

                        <!-- Edit Form (Hidden by default) -->
                        <div id="editForm<?php echo $row['id']; ?>" class="w3-modal" style="display: none;">
                            <div class="w3-modal-content w3-card-4">
                                <header class="w3-container w3-teal">
                                    <span onclick="document.getElementById('editForm<?php echo $row['id']; ?>').style.display='none'"
                                    class="w3-button w3-display-topright">&times;</span>
                                    <h2>Edit Movie</h2>
                                </header>
                                <div class="w3-container">
                                    <form method="post" action="manage_movies.php">
                                        <input type="hidden" name="movie_id" value="<?php echo $row['id']; ?>">
                                        <label for="title">Title:</label>
                                        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required><br><br>
                                        <label for="genre">Genre:</label>
                                        <input type="text" id="genre" name="genre" value="<?php echo htmlspecialchars($row['genre']); ?>" required><br><br>
                                        <button type="submit" name="edit_movie" class="w3-button w3-green">Save Changes</button>
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
