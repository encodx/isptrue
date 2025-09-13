<?php
require_once __DIR__ . '/../config/database.php';

try {
    $pdo = new PDO('sqlite:' . DB_PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL
    )");

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
    $stmt->execute(['admin']);
    $userExists = $stmt->fetchColumn();

    if (!$userExists) {
        $username = 'admin';
        $password = password_hash('password', PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        echo "Database and 'admin' user created successfully.\n";
        echo "Username: admin\n";
        echo "Password: password\n";
    } else {
        echo "Database already initialized. 'admin' user exists.\n";
    }

} catch (PDOException $e) {
    die("Database initialization failed: " . $e->getMessage());
}
