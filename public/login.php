
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ISP Flow Nexus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
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
            margin-bottom: 20px;
        }
        .logo {
            font-size: 50px;
            color: #007bff;
        }
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin: 10px 0 5px;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
        }
        .login-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 350px;
            text-align: left;
        }
        .login-form h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
        }
        .login-form p {
            margin-bottom: 20px;
            color: #777;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .password-wrapper {
            position: relative;
        }
        .password-wrapper input {
            padding-right: 40px;
        }
        .password-wrapper i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .register-link {
            text-align: center;
            margin-top: 15px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="bi bi-diagram-3"></i>
            </div>
            <h1 class="title">ISP ফ্লো নেক্সাস</h1>
            <p class="subtitle">ইন্টারনেট সার্ভিস প্রোভাইডার ম্যানেজমেন্ট সিস্টেম</p>
        </div>

        <div class="login-form">
            <h2>এডমিন লগইন</h2>
            <p>আপনার অ্যাকাউন্টে প্রবেশ করুন</p>
            
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-message">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            ?>

            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <label for="username">ইউজারনেম</label>
                    <input type="text" id="username" name="username" placeholder="আপনার ইউজারনেম লিখুন" required>
                </div>
                <div class="form-group">
                    <label for="password">পাসওয়ার্ড</label>
                    <div class="password-wrapper">
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
            this.classList.toggle('bi-eye-slash');
        });
    </script>
</body>
</html>
