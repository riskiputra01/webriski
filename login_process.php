<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials
    $valid_username = "admin";
    $valid_password = "admin";

    // Check if the entered username and password match the hardcoded credentials
    if ($username === $valid_username && $password === $valid_password) {
        // If valid, set session variables and redirect to dashboard
        $_SESSION['admin_id'] = 1; // Static ID for admin
        $_SESSION['admin_username'] = $username;
        header("Location:./admin/dashboard.php");
        exit();
    } else {
        // If invalid, redirect back to login with an error message
        $error = "Invalid username or password";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
} else {
    // If the request method is not POST, redirect to the login page
    header("Location: login.php");
    exit();
}