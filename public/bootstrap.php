<?php
// Prevents direct access to the bootstrap file.
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied.');
}

function is_installer_page() {
    $script_name = basename($_SERVER['SCRIPT_NAME']);
    return in_array($script_name, ['install.php', 'setup.php']);
}

$config_path = __DIR__ . '/../config/config.php';
$is_installed = false;

// Check if config file is valid
if (file_exists($config_path) && filesize($config_path) > 0) {
    // Temporarily include the config to check its contents
    require_once $config_path;
    if (defined('DB_HOST') && defined('DB_NAME') && defined('DB_USER')) {
        $is_installed = true;
    }
}

// --- Redirection Logic ---

// Case 1: Application is NOT installed, and the user is NOT on an installer page.
// Action: Redirect to the installer.
if (!$is_installed && !is_installer_page()) {
    // Use an absolute path for the redirect for better compatibility
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '\\/');
    header("Location: http://$host$uri/install.php");
    exit;
}

// Case 2: Application IS installed, and the user is trying to access an installer page.
// Action: Redirect away from the installer to the login page.
if ($is_installed && is_installer_page()) {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '\\/');
    header("Location: http://$host$uri/login.php");
    exit;
}

// If neither of the above cases is met, the script continues execution.
?>