<?php
if (!file_exists(__DIR__ . '/../config/config.php')) {
    header('Location: install.php');
    exit;
}

require_once __DIR__ . '/../config/config.php';
