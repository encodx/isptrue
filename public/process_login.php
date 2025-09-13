<?php
session_start();

// Hardcoded credentials for demonstration purposes
$valid_username = 'admin';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Authentication failed
        header('Location: login.php?error=Invalid username or password');
        exit;
    }
}
