<?php
function render_sidebar() {
    ob_start();
    ?>
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
                <li class="menu-item"><a href="logout.php"><i class="bi bi-box-arrow-left"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
