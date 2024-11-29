<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        /* Basic Reset */
        body, h1, h2, h3, p, a, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Sidebar Styles */
        .w3-sidebar {
            width: 200px;
            background-color: #d4edda; 
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .w3-sidebar .w3-bar-item {
            padding: 15px;
            text-align: center;
            color: #155724; 
            text-decoration: none;
            border-radius: 4px;
            display: block;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .w3-sidebar .w3-bar-item:hover {
            background-color: #c3e6cb; 
            color: #155724; 
        }

        .w3-sidebar .w3-bar-item.w3-button.active {
            background-color: #155724; 
            color: #fff; 
        }

        /* Content Styles */
        .content-container {
            margin-left: 200px;
            padding: 20px;
            background-color: #ffffff; 
        }

        .content-container h2 {
            margin-bottom: 15px;
            color: #333;
        }

        .content-container p {
            color: #555;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .w3-sidebar {
                width: 100%;
                height: auto;
                position: relative;
                display: flex;
                flex-direction: row;
            }

            .content-container {
                margin-left: 0;
                padding: 15px;
            }

            .w3-sidebar .w3-bar-item {
                display: inline-block;
                padding: 10px;
                text-align: left;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>

<div class="w3-sidebar w3-bar-block">
    <h5 class="w3-bar-item">Admin Menu</h5>
    <a class="w3-bar-item w3-button tablink" href="manage_movies.php">Manage Movies</a>
    <a class="w3-bar-item w3-button tablink" href="manage_users.php">Manage Users</a>
    <a class="w3-bar-item w3-button tablink" href="manage_bookings.php">Manage Bookings</a>
    <a class="w3-bar-item w3-button tablink" href="view_reports.php">View Reports</a>
    <a class="w3-bar-item w3-button tablink" href="site_settings.php">Site Settings</a>
</div>

<div class="content-container">
    <!-- Placeholder content -->
    <h2>Welcome to the Admin Dashboard</h2>
    <p>Select an option from the sidebar to manage different aspects of the site.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>
