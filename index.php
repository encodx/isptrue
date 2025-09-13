<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(to top, #f1f8ff, #d2e9ff);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            color: #333;
            padding-top: 50px;
        }
        .container {
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .header {
            margin-bottom: 30px;
        }
        .logo {
            background-color: #007bff;
            color: white;
            display: inline-block;
            padding: 15px;
            border-radius: 10px;
            font-size: 30px;
            margin-bottom: 15px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
        }
        .login-form {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: left;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 22px;
        }
        .login-form p {
            text-align: center;
            margin-bottom: 30px;
            color: #666;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
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
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .footer {
            margin-top: 40px;
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
        .footer-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #666;
            font-size: 14px;
        }
        .footer-item i {
            font-size: 24px;
            margin-bottom: 5px;
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
            <form>
                <div class="form-group">
                    <label for="username">ইউজারনেম</label>
                    <input type="text" id="username" placeholder="আপনার ইউজারনেম লিখুন">
                </div>
                <div class="form-group">
                    <label for="password">পাসওয়ার্ড</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" placeholder="আপনার পাসওয়ার্ড লিখুন">
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

        <div class="footer">
            <div class="footer-item">
                <i class="bi bi-router"></i>
                <span>মাইক্রোটিক API</span>
            </div>
            <div class="footer-item">
                <i class="bi bi-diagram-2"></i>
                <span>OLT ইন্টিগ্রেশন</span>
            </div>
            <div class="footer-item">
                <i class="bi bi-person-check"></i>
                <span>বায়োমেট্রিক</span>
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
