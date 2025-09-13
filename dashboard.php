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
        }
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            padding: 20px;
            height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            position: fixed; /* Fixed Sidebar */
            z-index: 100;
            overflow-y: auto;
        }
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .logo i {
            font-size: 30px;
            color: #007bff;
            margin-right: 10px;
        }
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }
        .menu-item {
            margin-bottom: 10px;
        }
        .menu-item a {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #555;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .menu-item a:hover, .menu-item.active a {
            background-color: #007bff;
            color: #fff;
        }
        .menu-item a i {
            margin-right: 15px;
            font-size: 18px;
        }
        .main-content {
            margin-left: 250px; /* Offset for fixed sidebar */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            /* The header is now part of the non-scrolling content */
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
            overflow-y: auto; /* Make this area scrollable */
            padding: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px; /* Add some space above the footer */
            color: #888;
            font-size: 14px;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <i class="bi bi-hexagon-fill"></i> zynix
        </div>
        <ul class="menu">
            <li class="menu-item active"><a href="#"><i class="bi bi-house-door"></i> Dashboards</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-app-indicator"></i> Apps</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-list-nested"></i> Nested Menu</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-person-badge"></i> Authentication</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-exclamation-circle"></i> Error</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-file-earmark"></i> Pages</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-card-list"></i> Forms</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-gem"></i> UI Elements</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-vector-pen"></i> Advanced UI</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-tools"></i> Utilities</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-grid"></i> Widgets</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-map"></i> Maps</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-emoji-smile"></i> Icons</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-bar-chart"></i> Charts</a></li>
            <li class="menu-item"><a href="#"><i class="bi bi-table"></i> Tables</a></li>
        </ul>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ... (add a lot of content here to test scrolling) ...</p>
            </div>

            <div class="footer">
                Copyright © 2025 Zynix. Designed with <i class="bi bi-heart-fill" style="color: red;"></i> by Spruko All rights reserved
            </div>
        </div>
    </div>
</body>
</html>