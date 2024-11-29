<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Use your MySQL username
$password = ""; // Use your MySQL password
$dbname = "movie_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle comment submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment']) && isset($_POST['rating'])) {
    $comment = htmlspecialchars($_POST['comment']); // Sanitize user input
    $rating = intval($_POST['rating']); // Sanitize and validate rating input
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Anonymous'; // Use session username or default to Anonymous

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO comments (username, comment, rating) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $username, $comment, $rating);

    // Execute the statement
    $stmt->execute();
    $stmt->close();
}

// Retrieve comments from the database
$comments = [];
$result = $conn->query("SELECT * FROM comments ORDER BY timestamp DESC");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section with Ratings</title>
    <style>
     body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    background-image: url('wick.jpg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    margin: 0;
    padding: 20px;
}

.comment-section {
    max-width: 600px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.8); 
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
        .comment-section h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .comment-section form textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
        }
        .comment-section form .rating {
            margin-bottom: 10px;
            display: flex;
            direction: ltr;
            unicode-bidi: bidi-override;
        }
        .comment-section form .rating input {
            display: none;
        }
        .comment-section form .rating label {
            font-size: 1.5em;
            color: #ddd;
            cursor: pointer;
            margin-left: 5px;
        }
        .comment-section form .rating input:checked ~ label,
        .comment-section form .rating input:checked ~ label ~ label {
            color: #f5c518;
        }
        .comment-section form button {
            padding: 10px 20px;
            border: none;
            background-color: #5cb85c;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .comment-section form button:hover {
            background-color: #4cae4c;
        }
        .comments-display {
            margin-top: 30px;
        }
        .comment-box {
            background: #f9f9f9;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        .comment-box .username {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .comment-box .timestamp {
            font-size: 0.9em;
            color: #777;
        }
        .comment-box .comment {
            font-size: 1em;
            color: #333;
        }
        .rating-stars {
            color: #f5c518;
            font-size: 1.2em;
            direction: ltr;
            unicode-bidi: bidi-override;
        }
        .rating-stars span {
            display: inline-block;
            color: #f5c518;
        }
    </style>
</head>
<body>

<div class="comment-section">
    <h2>Leave a Comment</h2>
    <form action="" method="POST">
        <textarea name="comment" placeholder="Write your comment here..." required></textarea>
        <div class="rating">
            <input type="radio" name="rating" id="star5" value="5">
            <label for="star5">&#9733;</label>
            <input type="radio" name="rating" id="star4" value="4">
            <label for="star4">&#9733;</label>
            <input type="radio" name="rating" id="star3" value="3">
            <label for="star3">&#9733;</label>
            <input type="radio" name="rating" id="star2" value="2">
            <label for="star2">&#9733;</label>
            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1">&#9733;</label>
        </div>
        <button type="submit">Submit</button>
    </form>

    <h2>Comments</h2>
    <div class="comments-display">
        <?php
        if (count($comments) > 0) {
            foreach ($comments as $comment) {
                echo "<div class='comment-box'>";
                echo "<p class='username'>{$comment['username']} <span class='timestamp'>{$comment['timestamp']}</span></p>";
                echo "<p class='comment'>{$comment['comment']}</p>";
                echo "<p class='rating-stars'>";
                for ($i = 5; $i >= 1; $i--) {
                    if ($i <= $comment['rating']) {
                        echo "<span>&#9733;</span>"; // Full star symbol
                    } else {
                        echo "<span>&#9734;</span>"; // Empty star symbol
                    }
                }
                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No comments yet. Be the first to comment!</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
