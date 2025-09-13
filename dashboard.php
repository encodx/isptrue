<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zynix - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            transition: margin-left 0.3s;
        }
        .sidebar {
            width: 220px;
            background-color: #ffffff;
            height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            position: fixed;
            z-index: 100;
            transition: width 0.3s;
        }
        .sidebar-top {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            overflow: hidden;
            white-space: nowrap;
        }
        .logo i {
            font-size: 30px;
            color: #007bff;
            margin-right: 10px;
            transition: margin 0.3s;
        }
        .logo span {
            display: inline-block;
            transition: opacity 0.3s;
        }
        .menu-container {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px 10px 20px 20px;
        }
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu-item {
            margin-bottom: 4px;
        }
        .menu-item a {
            display: flex;
            align-items: center;
            padding: 9px 15px;
            color: #555;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            font-size: 15px;
            white-space: nowrap;
        }
        .menu-item a:hover, .menu-item.active a {
            background-color: #007bff;
            color: #fff;
        }
        .menu-item a i {
            margin-right: 15px;
            font-size: 16px;
            transition: margin 0.3s;
        }
        .menu-item a span {
             display: inline-block;
            transition: opacity 0.3s;
        }
        .main-content {
            margin-left: 220px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            height: 100vh;
            transition: margin-left 0.3s;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .header .left-controls {
            display: flex;
            align-items: center;
        }
        .header .hamburger {
            font-size: 24px;
            cursor: pointer;
            margin-right: 20px;
        }
        .header .right-controls {
            display: flex;
            align-items: center;
        }
        .header .icon {
            font-size: 20px;
            margin-left: 20px;
            cursor: pointer;
        }
        .user-profile {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }
        .user-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .scrollable-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
            color: #888;
            font-size: 14px;
            border-top: 1px solid #eee;
        }

        /* Collapsed state */
        body.sidebar-collapsed .sidebar {
            width: 80px;
        }
        body.sidebar-collapsed .main-content {
            margin-left: 80px;
        }
        body.sidebar-collapsed .logo span,
        body.sidebar-collapsed .menu-item a span {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }
        body.sidebar-collapsed .logo i {
            margin-right: 0;
        }
        body.sidebar-collapsed .menu-item a {
             justify-content: center;
        }
        body.sidebar-collapsed .menu-item a i {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-top">
            <div class="logo">
                <i class="bi bi-hexagon-fill"></i>
                <span>zynix</span>
            </div>
        </div>
        <div class="menu-container">
            <ul class="menu">
                <li class="menu-item active"><a href="#"><i class="bi bi-house-door"></i> <span>Dashboards</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-app-indicator"></i> <span>Apps</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-list-nested"></i> <span>Nested Menu</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-person-badge"></i> <span>Authentication</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-exclamation-circle"></i> <span>Error</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-file-earmark"></i> <span>Pages</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-card-list"></i> <span>Forms</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-gem"></i> <span>UI Elements</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-vector-pen"></i> <span>Advanced UI</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-tools"></i> <span>Utilities</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-grid"></i> <span>Widgets</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-map"></i> <span>Maps</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-emoji-smile"></i> <span>Icons</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-bar-chart"></i> <span>Charts</span></a></li>
                <li class="menu-item"><a href="#"><i class="bi bi-table"></i> <span>Tables</span></a></li>
            </ul>
        </div>
    </div>
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
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...</p>
            </div>
            <div class="footer">
                Copyright © 2025 Zynix. Designed with <i class="bi bi-heart-fill" style="color: red;"></i> by Spruko All rights reserved
            </div>
        </div>
    </div>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const body = document.querySelector('body');

        hamburger.addEventListener('click', () => {
            body.classList.toggle('sidebar-collapsed');
        });
    </script>
</body>
</html>