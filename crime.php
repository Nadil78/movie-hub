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
                <a href="#" class="logo">
                    <img src="netflix.png" alt="Movie Hub Logo">
                </a>
                <ul class="nav-list">
                    <li><a href="home.php">Home</a></li>
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
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="nav-actions">
            <input type="text" placeholder="Search movies..." class="search-bar">
            <button class="login-btn">Login</button>
            
        </div>
    </div>
</nav>

    </header>

    <!-- Featured Slider -->
    <section class="slider">
        <div class="slide" style="background-image: url('slide1.jpg');">
            <div class="caption">
                <h2>Featured Tv Shows</h2>
                <p>Catch the latest and greatest Tv Shows.</p>
                <button>Learn More</button>
            </div>
        </div>
        <div class="slide" style="background-image: url('slide2.jpg');">
            <div class="caption">
                <h2>Another Featured Tv Shows</h2>
                <p>Don't miss out on this one!</p>
                <button>Learn More</button>
            </div>
        </div>
        <!-- Add more slides as needed -->
    </section>

    <!-- Movie Gallery -->
    <section class="gallery">
        <h2>Top Seasonal Crime Tv shows</h2>
        <div class="movie-grid">
            <!-- Movie Cards -->
            <div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Breaking Bad.jpg" alt="Breaking Bad">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Breaking Bad</h3>
        <p>Genre: Crime | Rating: 9.5/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="The Sopranos.jpg" alt="The Sopranos">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>The Sopranos</h3>
        <p>Genre: Crime | Rating: 9.2/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="True Detective.jpg" alt="True Detective">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>True Detective</h3>
        <p>Genre: Crime | Rating: 8.9/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Narcos.jpg" alt="Narcos">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Narcos</h3>
        <p>Genre: Crime | Rating: 8.8/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Mindhunter.jpg" alt="Mindhunter">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Mindhunter</h3>
        <p>Genre: Crime | Rating: 8.7/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Peaky Blinders.jpg" alt="Peaky Blinders">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Peaky Blinders</h3>
        <p>Genre: Crime | Rating: 8.6/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="The Wire.jpg" alt="The Wire">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>The Wire</h3>
        <p>Genre: Crime | Rating: 9.3/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Dexter.jpg" alt="Dexter">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Dexter</h3>
        <p>Genre: Crime | Rating: 8.4/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Better Call Saul.jpg" alt="Better Call Saul">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Better Call Saul</h3>
        <p>Genre: Crime | Rating: 8.7/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Sherlock.jpg" alt="Sherlock">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Sherlock</h3>
        <p>Genre: Crime | Rating: 8.7/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Broadchurch.jpg" alt="Broadchurch">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Broadchurch</h3>
        <p>Genre: Crime | Rating: 8.2/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Luther.jpg" alt="Luther">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Luther</h3>
        <p>Genre: Crime | Rating: 8.5/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Ozark.jpg" alt="Ozark">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Ozark</h3>
        <p>Genre: Crime | Rating: 8.4/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="The Killing.jpg" alt="The Killing">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>The Killing</h3>
        <p>Genre: Crime | Rating: 8.1/10</p>
    </div>
</div>
<div class="movie-card">
    <div class="movie-thumbnail">
        <img src="Line of Duty.jpg" alt="Line of Duty">
        <button class="play-btn">&#9658;</button> <!-- Play Button -->
    </div>
    <div class="movie-info">
        <h3>Line of Duty</h3>
        <p>Genre: Crime | Rating: 8.3/10</p>
    </div>
</div>

            <!-- Add more movie cards as needed -->
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
    background: url('crimee.jpg') no-repeat center center fixed; 
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
