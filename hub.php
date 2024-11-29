<?php
session_start();

if (isset($_SESSION['your_key'])) {
    $value = $_SESSION['your_key'];
    // Do something with $value
} else {
    echo "Session variable 'your_key' is not set.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>My Website</title>
    <style>
        /* Add your styling here */
    </style>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>You are logged in as <?php echo $_SESSION['username']; ?>.</p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hub.css">
    <title>Movie Hub</title>
</head>
<body>
    
    <!-- Header and Navigation -->
    <header>
        <nav>
        <div class="nav-container">
    <a href="#" class="logo" style="display: flex; align-items: center; font-size: 2rem; font-weight: 900; color: #E50914;">
        <i class="bx bx-film bx-tada" style="font-size: 2.5rem; margin-right: 0.5rem; color: #E50914;"></i>
    </a>
                <a href="#" class="logo">
                    <img src="netflix.png" alt="Movie Hub Logo">
                </a>
                <ul class="nav-list">
                    <li><a href="#">Home</a></li>
            <li id="browse-menu" class="menu-item">
                <a href="#">Movies</a>
                <ul class="submenu">
                    <li><a href="action.php">Action</a></li>
                    <li><a href="horror.php">Horror</a></li>
                    <li><a href="romance.php">Romance</a></li> 
                    <li><a href="war.php">War</a></li>
                </ul>
            </li>
            <li id="browse-menu" class="menu-item">
                <a href="#">TV Shows</a>
                <ul class="submenu">
                    <li><a href="adventure.php">Adventure</a></li>
                    <li><a href="spine.php">Spine-chilling</a></li>
                    <li><a href="super.php">Super Hero</a></li> 
                    <li><a href="crime.php">Crime</a></li>
                </ul>
            </li>
            <li><a href="about us.php">About</a></li>
            <li><a href="comment.php">Comment</a></li>
            
        </ul>
        <div class="nav-actions">
            <input type="text" placeholder="Search movies..." class="search-bar">
            <a href="login.php">
    <button class="login-btn">Login</button>
</a>
            
        </div>
    </div>
</nav>

    </header>

    <!-- Featured Slider -->
    <section class="slider">
        <div class="slide" style="background-image: url('slide1.jpg');">
            <div class="caption">
                <h2>Featured Movie</h2>
                <p>Catch the latest and greatest movies.</p>
                <button>Learn More</button>
            </div>
        </div>
        <div class="slide" style="background-image: url('slide2.jpg');">
            <div class="caption">
                <h2>Another Featured Movie</h2>
                <p>Don't miss out on this one!</p>
                <button>Learn More</button>
            </div>
        </div>
        <!-- Add more slides as needed -->
    </section>
<!-- Movie Gallery -->
<section class="gallery">
    <h2>Top Seasonal Movies</h2>
    <div class="movie-grid">
        <!-- Movie Card 1 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="the convert.jpg" alt="The Convert">
            </div>
            <div class="movie-info">
                <h3>The Convert</h3>
                <p>Genre: Drama / Historical </p> 
                <p>Rating: 7.5/10</p>
            </div>
        </div>
        
        <!-- Movie Card 2 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="ride or die bad boys.jpg" alt="Bad Boys">
               
            </div>
            <div class="movie-info">
                <h3>Bad Boys</h3>
                <p>Genre: Action / Comedy / Crime</p>
                <p>Rating: 7.8/10</p>
            </div>
        </div>
        
        <!-- Movie Card 3 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="batman.jpg" alt="Batman">
                
            </div>
            <div class="movie-info">
                <h3>Batman</h3>
                <p>Genre: Action / Superhero / Thriller</p>
                <p>Rating: 6.2/10</p>
            </div>
        </div>
        
        <!-- Movie Card 4 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="humane.jpg" alt="Humane">
                
            </div>
            <div class="movie-info">
                <h3>Humane</h3>
                <p>Genre: Drama / Thriller</p>
                <p>Rating: 6.1/10</p>
            </div>
        </div>
        
        <!-- Movie Card 5 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="the strangers.jpg" alt="The Strangers">
                
            </div>
            <div class="movie-info">
                <h3>The Strangers</h3>
                <p>Genre: Horror / Thriller</p>
                <p>Rating: 6.9/10</p>
            </div>
        </div>
         <!-- Movie Card 6 -->
         <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="under paris.jpg" alt="Under Paris">
                
            </div>
            <div class="movie-info">
                <h3>Under Paris</h3>
                <p>Genre: Mystery / Drama</p>
                <p>Rating: 7.6/10</p>
            </div>
        </div>
        
        <!-- Movie Card 7 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="verge of death.jpg" alt="Verge of Death">
                
            </div>
            <div class="movie-info">
                <h3>Verge of Death</h3>
                <p>Genre: Thriller / Horror</p>
                <p>Rating: 6.6/10</p>
            </div>
        </div>
        
        <!-- Movie Card 8 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="godzilla x kong.jpg" alt="Godzilla X Kong">
                
            </div>
            <div class="movie-info">
                <h3>Godzilla X Kong</h3>
                <p>Genre: Action / Sci-Fi / Monster</p>
                <p>Rating: 6.2/10</p>
            </div>
        </div>
        
        <!-- Movie Card 9 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="farang.jpg" alt="Farang">
                
            </div>
            <div class="movie-info">
                <h3>Farang</h3>
                <p>Genre: Action / Crime / Thriller</p>
                <p>Rating: 5.9/10</p>
            </div>
        </div>
        
        <!-- Movie Card 10 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="ghost busters.jpg" alt="Ghost Busters">
                
            </div>
            <div class="movie-info">
                <h3>Ghost Busters</h3>
                <p>Genre: Comedy / Fantasy / Sci-Fi</p>
                <p>Rating: 5.8/10</p>
            </div>
        </div>
        
        <!-- Movie Card 11 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="prey.jpg" alt="Prey">
                
            </div>
            <div class="movie-info">
                <h3>Prey</h3>
                <p>Genre: Action / Thriller / Sci-Fi</p>
               <p>Rating: 7.6/10</p>
            </div>
        </div>
        
        <!-- Movie Card 12 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="Ship of the Damned.jpg" alt="Ship of the Damned">
                
            </div>
            <div class="movie-info">
                <h3>Ship of the Damned</h3>
                <p>Genre: Horror / Thriller</p>
                <p>Rating: 7.4/10</p>
            </div>
        </div>

        <!-- Movie Card 12 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="all fun and games.jpg" alt="all fun and games">
                
            </div>
            <div class="movie-info">
                <h3>All Fun and Games</h3>
                <p>Genre: Horror / Thriller</p>
                <p>Rating: 7.4/10</p>
            </div>
        </div>

        <!-- Movie Card 12 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="hellhound.jpg" alt="Hellhound">
                
            </div>
            <div class="movie-info">
                <h3>Hellhound</h3>
                <p>Genre: Action / Thriller</p>
                <p>Rating: 7.4/10</p>
            </div>
        </div>
        
    
        <!-- Movie Card 15 -->
        <div class="movie-card">
            <div class="movie-thumbnail">
                <img src="planet of the apes.jpg" alt="Planet of the Apes">
                
            </div>
            <div class="movie-info">
                <h3>Planet of the Apes</h3>
                <p>Genre:  Sci-Fi / Action / Adventure</p>
                <p>Rating: 7.5/10</p>
            </div>
        </div>
    </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Footer Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS for the advanced footer */

        body {
    font-family: 'Times New Roman', Times, serif;
    background: url('iron.jpg') no-repeat center center fixed; 
    background-size: cover; 
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}


        .content {
            flex: 1;
        }

        .footer {
            background-color: #222;
            color: #ddd;
            padding: 50px 0;
        }

        .footer .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 30px;
        }

        .footer-column {
            flex: 1;
            margin: 0 20px;
        }

        .footer-column h3 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-column p,
        .footer-column ul {
            font-size: 14px;
            line-height: 1.8;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #e09;
        }

        .social-icons {
            display: flex;
            justify-content: flex-start;
        }

        .social-icons a {
            color: #ddd;
            margin-right: 15px;
            font-size: 18px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #e09;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            width: 100%;
            max-width: 1200px;
        }

        .footer-bottom p {
            font-size: 14px;
            color: #aaa;
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Content of the website -->
    <div class="content">
        <!-- Your content goes here -->
    </div>

    <!-- Advanced Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>About Us</h3>
                    <p>Welcome to MovieHub, your ultimate destination for all things cinema. Whether you're a fan of thrilling blockbusters, indie gems, or timeless classics, we bring the magic of movies to your fingertips. Our platform is designed to make discovering, booking, and enjoying movies as seamless as possible. At MovieHub, we're passionate about connecting you with the stories that move you. Explore our vast collection, stay updated with the latest releases, and experience the joy of cinema like never before.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Series</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="mailto:info@moviehub.com">info@moviehub.com</a></li>
                        <li><a href="tel:+123456789">+123 456 789</a></li>
                        <li><a href="#">123 Movie St., Filmtown</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 MovieHub. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>



  
    
</body>
</html>
