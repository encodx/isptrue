<?php
session_start();
require_once __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
            exit;
        } else {
            // Authentication failed
            header('Location: login.php?error=Invalid username or password');
            exit;
        }
    } catch (Exception $e) {
        // Database error
        header('Location: login.php?error=Something went wrong. Please try again later.');
        exit;
    }
}
