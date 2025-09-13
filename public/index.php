<?php require_once '../templates/sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zynix - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php echo render_sidebar(); ?>
    <div class="main-content">
        <div class="header">
            <div class="left-controls">
                <i class="bi bi-list hamburger"></i>
            </div>
            <div class="right-controls">
                <i class="bi bi-search icon"></i>
                <i class="bi bi-bell icon"></i>
                <div class="user-profile">
                    <img src="https://i.pravatar.cc/30" alt="User Avatar">
                    <span>Mr. Jack</span>
                </div>
                 <i class="bi bi-gear icon"></i>
            </div>
        </div>
        <div class="scrollable-content">
            <div class="content-area">
                 <!-- Main content goes here -->
                 <p>Scroll down to see the footer remains fixed.</p>
                 <div style="height: 1200px; background: #e9ecef; border-radius: 5px; display:flex; align-items:center; justify-content:center; margin: 20px 0;">Long content area to demonstrate scrolling</div>
            </div>
        </div>
        <div class="footer">
             Copyright © 2025 Zynix. Designed with <i class="bi bi-heart-fill" style="color: red;"></i> by Spruko All rights reserved
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
