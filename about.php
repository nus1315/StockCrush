<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - StockCrush</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212; /* พื้นหลังสีดำ */
            color: #e0e0e0; /* ข้อความสีขาว */
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #1e1e1e; /* พื้นหลัง Navbar */
        }

        .navbar-brand {
            color: #f39c12; /* โลโก้สีส้ม */
        }

        .navbar-brand:hover {
            color: #ffd700;
        }

        .nav-link {
            color: #bbb; /* ลิงก์เมนูสีเทาอ่อน */
        }

        .nav-link:hover {
            color: #fff; /* ลิงก์เมนูเมื่อ hover */
        }

        .card {
            background-color: #282828; /* พื้นหลังการ์ด */
            color: #e0e0e0; /* ข้อความในการ์ด */
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .card-img-top {
            border-radius: 8px 8px 0 0;
        }

        .btn-dark {
            background-color: #444; /* ปุ่มธีมดำ */
            border-color: #555;
        }

        .btn-dark:hover {
            background-color: #555;
            border-color: #666;
        }

        h2, h3 {
            color: #f39c12; /* หัวข้อสีส้ม */
        }

        .card-body .card-title {
            font-size: 1.2rem; /* ขนาดชื่อทีม */
        }

        .card-body .card-text {
            font-size: 1rem; /* ขนาดตำแหน่ง */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">StockCrush</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php#header">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php#social">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- About Section -->
<section class="container py-5">
    <h2>About StockCrush</h2>
    <p>StockCrush is a startup focused on providing real-time market analysis and stock insights to empower investors.</p>
    
    <h3>Our Team</h3>
    <div class="row">
        <!-- Team Member 1 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="about/1.jpg" class="card-img-top" alt="Varanpong - CEO & Founder">
                <div class="card-body text-center">
                    <h5 class="card-title">Varanpong</h5>
                    <p class="card-text">CEO & Founder</p>
                    <a href="https://github.com/porchportal" class="btn btn-dark btn-sm">GitHub</a>
                </div>
            </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <img src="about/4.jpg" class="card-img-top" alt="Chayanapas - CTO">
                <div class="card-body text-center">
                    <h5 class="card-title">Chayanapas</h5>
                    <p class="card-text">Coordinator</p>
                    <a href="https://github.com/nus1315" class="btn btn-dark btn-sm">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
