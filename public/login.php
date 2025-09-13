<?php
// This bootstrap file handles the core redirection logic.
require_once __DIR__ . '/bootstrap.php';

session_start();

// If the user is already logged in, redirect them to the dashboard.
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP ফ্লো নেক্সাস - লগইন</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .header {
            margin-bottom: 25px;
        }
        .logo {
            font-size: 55px;
            color: #0056b3;
        }
        .title {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            margin: 10px 0 5px;
        }
        .subtitle {
            font-size: 17px;
            color: #555;
        }
        .login-form {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            width: 420px;
            text-align: left;
        }
        .login-form h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
            font-weight: 600;
        }
        .login-form p {
            margin-bottom: 25px;
            color: #666;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }
        .form-group input {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-group i {
            position: absolute;
            left: 12px;
            top: 42px;
            color: #888;
        }
        .form-group input:focus {
            outline: none;
            border-color: #0056b3;
        }
        .password-wrapper {
            position: relative;
        }
        #togglePassword {
            position: absolute;
            right: 12px;
            top: 12px;
            cursor: pointer;
            color: #888;
        }
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            transition: background 0.3s;
        }
        .login-btn:hover {
            background: linear-gradient(to right, #0056b3, #004494);
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #0056b3;
            text-decoration: none;
            font-weight: 600;
        }
        .error-message, .success-message {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="bi bi-diagram-3-fill"></i>
            </div>
            <h1 class="title">ISP ফ্লো নেক্সাস</h1>
            <p class="subtitle">ইন্টারনেট সার্ভিস প্রোভাইডার ম্যানেজমেন্ট সিস্টেম</p>
        </div>

        <div class="login-form">
            <h2>এডমিন লগইন</h2>
            <p>আপনার অ্যাকাউন্টে প্রবেশ করুন</p>

            <?php if (isset($_GET['error'])): ?>
                <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
            <?php endif; ?>
            <?php if (isset($_GET['success'])): ?>
                <div class="success-message"><?php echo htmlspecialchars($_GET['success']); ?></div>
            <?php endif; ?>

            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <label for="username">ইউজারনেম</label>
                    <i class="bi bi-person-fill"></i>
                    <input type="text" id="username" name="username" placeholder="আপনার ইউজারনেম লিখুন" required>
                </div>
                <div class="form-group">
                    <label for="password">পাসওয়ার্ড</label>
                    <div class="password-wrapper">
                        <i class="bi bi-lock-fill"></i>
                        <input type="password" id="password" name="password" placeholder="আপনার পাসওয়ার্ড লিখুন" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                </div>
                <button type="submit" class="login-btn">
                    <i class="bi bi-box-arrow-in-right"></i> লগইন করুন
                </button>
            </form>

            <div class="register-link">
                <a href="#">নতুন গ্রাহক রেজিস্ট্রেশন</a>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bi-eye');
        });
    </script>
</body>
</html>
