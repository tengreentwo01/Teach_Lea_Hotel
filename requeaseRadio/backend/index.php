<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if 'username' and 'status' are set in $_SESSION before echoing
if (isset($_SESSION['username'], $_SESSION['status'])) {
    // Check if 'status' is not empty
    if (!empty($_SESSION['status'])) {
        echo "Username: " . htmlspecialchars($_SESSION['username']) . " ";
        echo "<a href='../control/logout.php'>Log Off</a>";
    } else {
        // ทำลายเซสชัน
        session_destroy();
        // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
        header("Location: ../admin.php");
        // จบการทำงานของสคริปต์
        die();
    }
} else {
    echo "Username or status not set in session.";
    // ทำลายเซสชัน
    session_destroy();
    // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
    header("Location: ../admin.php");
    // จบการทำงานของสคริปต์
    die();
}


// จำนวนเครื่องทั้งหมด
$total_count = 100;

// ดึงข้อมูลการยืมเครื่องวิทยุจากฐานข้อมูล
$sql = "SELECT * FROM `rongtook`.`mission`"; // เรียงตาม id
$result = $conn->query($sql);

// เก็บจำนวนเครื่องที่ใช้งาน
$used_count = 0;
$remaining_count = $total_count; // ใช้จำนวนเครื่องทั้งหมดที่กำหนด

if ($result->num_rows > 0) {
    // คำนวณจำนวนเครื่องที่ใช้งาน
    while ($row = $result->fetch_assoc()) {
        $used_count += $row['how_many'];
    }
    $remaining_count -= $used_count; // คำนวณจำนวนเครื่องที่เหลือ
}

// ดึงรายละเอียดการยืมเครื่องวิทยุพร้อมวันหมดอายุ
$date_sql = "SELECT *, DATEDIFF(date2, NOW()) AS days_remaining
             FROM `rongtook`.`mission`
             WHERE  DATEDIFF(date2, NOW()) >= 0 -- เฉพาะวันที่ที่ยังไม่หมด
            AND status=1   
             ORDER BY id DESC"; // เรียงจากวันหมดอายุใกล้ที่สุด

$date_result = $conn->query($date_sql);

// ปิดการเชื่อมต่อ
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('menu.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                   

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php include('admin2.php'); ?>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>