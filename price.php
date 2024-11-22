<?php
// เริ่มต้น Session
session_start();

// ฟังก์ชันตรวจสอบการล็อกอิน
function isLoggedIn() {
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockCrush Pricing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .navbar-custom {
            background-color: #1e1e1e;
        }
        .navbar-custom .nav-link {
            color: #f39c12;
        }
        .navbar-custom .nav-link:hover {
            color: #e67e22;
        }
        .navbar-brand {
            color: #f39c12;
        }
        .pricing-section {
            padding: 50px 0;
        }
        .pricing-card {
            border: 1px solid #444;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: #1e1e1e;
        }
        .btn-subscribe {
            background-color: #f39c12;
            color: #121212;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-subscribe:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">StockCrush</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Team</a></li>
                    <?php if (isLoggedIn()): ?>
                        <li class="nav-item"><a class="nav-link" href="dashboard.php">Go Back</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <h2 class="text-center mb-5">Your Current Plan: 
                <?php 
                    echo isset($_SESSION['subscription']) ? $_SESSION['subscription'] : "None";
                ?>
            </h2>
            <div class="row">
                <!-- Free Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h3>Free Version</h3>
                        <p>Basic features, $0/month</p>
                        <form method="post" action="">
                            <button type="submit" name="subscribe_free" class="btn-subscribe">Get Started</button>
                        </form>
                    </div>
                </div>

                <!-- Freemium Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h3>Freemium Version</h3>
                        <p>Advanced features, $0/month</p>
                        <ul style="text-align: left; padding: 10px;">
                            <li>Enhanced analytics</li>
                            <li>Additional tools for serious traders</li>
                        </ul>
                        <form method="post" action="">
                            <button type="submit" name="subscribe_freemium" class="btn-subscribe">Subscribe Now</button>
                        </form>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h3>Premium Version</h3>
                        <p><strong>$50/month</strong></p>
                        <ul style="text-align: left; padding: 10px;">
                            <li>Advanced simulations</li>
                            <li>Personalized learning paths</li>
                            <li>AI-powered analytics</li>
                            <li>24/7 priority support</li>
                        </ul>
                        <form method="post" action="">
                            <button type="submit" name="subscribe_premium" class="btn-subscribe">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // การจัดการการสมัครใช้งาน
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isLoggedIn()) {
            // ถ้ายังไม่ได้ล็อกอิน ให้เปลี่ยนเส้นทางไปยังหน้า login.php
            echo "<script>
                alert('Please login to subscribe!');
                window.location.href = 'login.php';
            </script>";
            exit();
        } else {
            // หากล็อกอินแล้ว อัปเดตแผนในเซสชัน
            if (isset($_POST['subscribe_free'])) {
                $_SESSION['subscription'] = "Free Version";
                echo "<script>alert('You have selected the Free Version!');</script>";
            } elseif (isset($_POST['subscribe_freemium'])) {
                $_SESSION['subscription'] = "Freemium Version";
                echo "<script>alert('You have selected the Freemium Version!');</script>";
            } elseif (isset($_POST['subscribe_premium'])) {
                $_SESSION['subscription'] = "Premium Version";
                echo "<script>alert('You have selected the Premium Version!');</script>";
            }
        }
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
