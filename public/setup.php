<?php
// This bootstrap file handles the core redirection logic.
require_once __DIR__ . '/bootstrap.php';

session_start();

$step = $_POST['step'] ?? $_GET['step'] ?? null;

if ($step == 1) {
    // Step 1: Test Database Connection
    $db_host = $_POST['db_host'];
    $db_name = $_POST['db_name'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];

    // Try to connect to the database
    try {
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // Store credentials in session and proceed to the next step
        $_SESSION['db_credentials'] = [
            'host' => $db_host,
            'name' => $db_name,
            'user' => $db_user,
            'pass' => $db_pass
        ];

        $conn->close();
        header('Location: setup.php?step=2');
        exit;

    } catch (Exception $e) {
        header('Location: install.php?error=' . urlencode($e->getMessage()));
        exit;
    }

} elseif ($step == 2) {
    // Step 2: Show Admin Creation Form
    if (!isset($_SESSION['db_credentials'])) {
        header('Location: install.php?error=Database credentials not set.');
        exit;
    }
    // Display the admin creation form
    echo '<style>/* same styles as install.php */ body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; } .install-form { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; text-align: left; } .install-form h2 { font-size: 22px; margin-bottom: 20px; color: #333; text-align: center; } .form-group { margin-bottom: 15px; } .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; } .form-group input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; } .form-btn { width: 100%; padding: 12px; background: linear-gradient(to right, #28a745, #218838); border: none; border-radius: 5px; color: white; font-size: 16px; font-weight: bold; cursor: pointer; } </style>';
    echo '<div class="install-form">';
    echo '<h2>Create Admin User</h2>';
    echo '<form action="setup.php" method="POST">';
    echo '<input type="hidden" name="step" value="3">';
    echo '<div class="form-group">';
    echo '<label for="admin_user">Admin Username</label>';
    echo '<input type="text" id="admin_user" name="admin_user" required>';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="admin_pass">Admin Password</label>';
    echo '<input type="password" id="admin_pass" name="admin_pass" required>';
    echo '</div>';
    echo '<button type="submit" class="form-btn">Finish Installation</button>';
    echo '</form>';
    echo '</div>';

} elseif ($step == 3) {
    // Step 3: Finalize Installation
    if (!isset($_SESSION['db_credentials']) || !isset($_POST['admin_user']) || !isset($_POST['admin_pass'])) {
        header('Location: install.php?error=Missing required information.');
        exit;
    }

    $db = $_SESSION['db_credentials'];
    $admin_user = $_POST['admin_user'];
    $admin_pass = $_POST['admin_pass'];

    // Create config file
    $config_content = "<?php\n\ndefine('DB_HOST', '{$db['host']}');\ndefine('DB_NAME', '{$db['name']}');\ndefine('DB_USER', '{$db['user']}');\ndefine('DB_PASS', '{$db['pass']}');\n";
    
    // Ensure the config directory exists
    if (!is_dir(__DIR__ . '/../config')) {
        mkdir(__DIR__ . '/../config', 0755, true);
    }
    
    file_put_contents(__DIR__ . '/../config/config.php', $config_content);

    try {
        $conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
        if ($conn->connect_error) {
            throw new Exception("Failed to connect to the database after saving config.");
        }

        // Create users table
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
        )";
        $conn->query($sql);

        // Insert admin user
        $hashed_password = password_hash($admin_pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $admin_user, $hashed_password);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        // Clean up session and redirect
        session_destroy();
        header('Location: login.php?success=Installation complete. Please log in.');
        exit;

    } catch (Exception $e) {
        // If something goes wrong, delete the created config file.
        if (file_exists(__DIR__ . '/../config/config.php')) {
            unlink(__DIR__ . '/../config/config.php');
        }
        header('Location: install.php?error=' . urlencode($e->getMessage()));
        exit;
    }
}
