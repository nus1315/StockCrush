<?php
// เริ่มต้น session
session_start();

// ตรวจสอบสถานะการล็อกอิน
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION['loggedIn'] = false;
    $isLoggedIn = false;
    // Redirect to the login page or refresh the current page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockCrush</title>
    <!-- External Libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            scroll-behavior: smooth;
        }
        h1, h2 {
            color: #f39c12;
            font-weight: 700;
        }
        p {
            margin-bottom: 20px;
        }
        a {
            font-size: 1rem;
            color: inherit;
            text-decoration: none;
        }
        a:hover {
            color: #f39c12;
        }

        /* Navbar */
        .navbar-custom {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #1e1e1e;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 600;
        }
        .nav-link {
            color: #bbb !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #f39c12 !important;
        }

        /* Header Section */
        header {
            padding: 50px 0;
        }
        header img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }
        header button, .login-btn {
            background: #f39c12;
            color: #fff;
            padding: 12px 30px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        header button:hover, .login-btn:hover {
            background: #e67e22;
        }

        /* Features Section */
        .feature-card {
            background: #333;
            color: #e0e0e0;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        .feature-icon {
            font-size: 50px;
            color: #f39c12;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background: #1e1e1e;
            padding: 20px;
            text-align: center;
        }
        .social-icon {
            font-size: 30px;
            color: #f39c12;
            margin: 0 15px;
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            color: #e67e22;
            transform: scale(1.2);
        }

        /* Media Queries */
        @media (max-width: 767px) {
            h1 {
                font-size: 1.5rem;
            }
            .feature-icon {
                font-size: 40px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="#">StockCrush</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#header">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#social">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">Team</a></li>
            <?php if ($isLoggedIn): ?>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!-- Header Section -->
<header id="header" class="container text-center text-md-left">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Welcome to <span>StockCrush</span></h1>
            <p>Your ultimate stock market analysis tool.</p>
            <a class="btn login-btn" href="https://heyzine.com/flip-book/c80e8d21c5.html">about</a>
            <a class="btn login-btn" href="price.php">Download Now</a>
            <?php if (!$isLoggedIn): ?>
                <a class="btn login-btn" href="login.php">Login</a>
            <?php endif; ?>
        </div>
        <div class="col-md-6 text-center">
            <img src="about/6.png" alt="StockCrush Overview" class="img-fluid">
        </div>
    </div>
</header>


<!-- Features Section -->
<section id="features" class="container text-center py-5">
    <h2>Features</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="feature-card">
                <i class="fas fa-chart-line feature-icon"></i>
                <h4>Real-Time Analysis</h4>
                <p>Get live stock market updates and analysis on the go.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <i class="fas fa-bell feature-icon"></i>
                <h4>Custom Alerts</h4>
                <p>Set personalized alerts for stocks that matter to you.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <i class="fas fa-chart-pie feature-icon"></i>
                <h4>Market Insights</h4>
                <p>Access deep insights into stock market trends and forecasts.</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Links -->
<footer>
<section id="social" class="text-center py-4">
    <h3 style="margin-bottom: 20px; font-weight: bold;">Follow Us</h3>
    <a href="https://www.facebook.com/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="https://x.com/?lang=en" class="social-icon"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/?hl=th" class="social-icon"><i class="fab fa-instagram"></i></a>
</section>

<!-- Footer Text -->

    <p>&copy; 2024 StockCrush. All rights reserved.</p>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
