
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation - ISP Flow Nexus</title>
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
        .install-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 400px;
            text-align: left;
        }
        .install-form h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }
        .install-form p {
            margin-bottom: 20px;
            color: #777;
            text-align: center;
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
        .form-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
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
            <h1 class="title">ISP ফ্লো নেক্সাস - Installation</h1>
            <p class="subtitle">ইন্টারনেট সার্ভিস প্রোভাইডার ম্যানেজমেন্ট সিস্টেম</p>
        </div>

        <div class="install-form">
            <h2>Database Configuration</h2>
            <p>আপনার ডাটাবেস এর তথ্য দিন</p>

            <?php if (isset($_GET['error'])): ?>
                <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
            <?php endif; ?>

            <form action="setup.php" method="POST">
                <input type="hidden" name="step" value="1">
                <div class="form-group">
                    <label for="db_host">Database Host</label>
                    <input type="text" id="db_host" name="db_host" value="localhost" required>
                </div>
                <div class="form-group">
                    <label for="db_name">Database Name</label>
                    <input type="text" id="db_name" name="db_name" required>
                </div>
                <div class="form-group">
                    <label for="db_user">Database Username</label>
                    <input type="text" id="db_user" name="db_user" required>
                </div>
                <div class="form-group">
                    <label for="db_pass">Database Password</label>
                    <input type="password" id="db_pass" name="db_pass">
                </div>
                <button type="submit" class="form-btn">Connect</button>
            </form>
        </div>
    </div>
</body>
</html>
