<?php
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    // Validate passwords
    if ($password_1 !== $password_2) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $username;
        $_SESSION['id'] = $conn->insert_id;

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Registration failed. Try again.'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
