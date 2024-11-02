<?php $status = (int)$_SESSION['status']; ?>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <?php if ($status === 1 || $status === 2): ?>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="./board.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts 
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="./static.php">Static Navigation</a>
                            <a class="nav-link" href="./sidenav.php">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="../control/logout.php">Login</a>
                           
                        </nav>
                    </div>
                   
                    <?php if ($status === 2): ?>
                        <div class="sb-sidenav-menu-heading">สมาชิก</div>
                     
                        <a class="nav-link" href="./member.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            จัดกการ สมาชิก
                        </a>

                        <a class="nav-link" href="regis.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>    
                        Register</a>
                        <a class="nav-link" href="./chart.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            สถิติ
                        </a>

                     

                    <?php endif; ?>
                <?php endif; ?> 
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= htmlspecialchars($_SESSION['username'] ?? 'Guest') ?>
        </div>
    </nav>
</div>
