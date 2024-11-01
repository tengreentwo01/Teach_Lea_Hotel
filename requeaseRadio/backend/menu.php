<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ระบบจัดการวิทยุ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="./admin2.php">Manage Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./admin_Form.php">Request Radio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./persion.php">user</a>
                </li>
               
               
            </ul>
            <a class="nav-link" href="./register.php">Register</a>
            <div class="ms-auto">
           
                   
                
                <?php
                // แสดงชื่อผู้ใช้
                echo "Username: " . htmlspecialchars($_SESSION['username']) . " ";
                echo "<a href='../control/logout.php'>Log Off</a>";
                ?>
            </div>
        </div>
    </div>
</nav>