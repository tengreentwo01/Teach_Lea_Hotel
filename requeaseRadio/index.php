<?php
// เริ่มต้นเซสชัน
session_start();
include './model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่า URL ลงท้ายด้วย /admin หรือ /login
$request_uri = $_SERVER['REQUEST_URI'];
if (preg_match('/\/admin$|\/login$|\/backend$/', $request_uri)) {
    header('Location: ../backend/admin.php');
    exit(); // ออกจากสคริปต์หลังจากการเปลี่ยนเส้นทาง
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
        if ($row['status'] == 1) { // เช็คสถานะ
            $used_count += $row['how_many'];
        }
    }
    $remaining_count -= $used_count; // คำนวณจำนวนเครื่องที่เหลือ
}

// ดึงรายละเอียดการยืมเครื่องวิทยุพร้อมวันหมดอายุ
$date_sql = "SELECT *, DATEDIFF(date2, NOW()) AS days_remaining
             FROM `rongtook`.`mission`
             WHERE DATEDIFF(date2, NOW()) >= 0 -- เฉพาะวันที่ที่ยังไม่หมด
             AND status = 1   
             ORDER BY id DESC"; // เรียงจากวันหมดอายุใกล้ที่สุด

$date_result = $conn->query($date_sql);

// ปิดการเชื่อมต่อ
$conn->close();
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถานะเครื่องวิทยุ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            color: #003366; /* Dark Blue */
        }
        .status {
            font-size: 1.2em;
            color: #00509e; /* Lighter Blue */
        }
        .btn-link {
            color: #003366; /* Dark Blue */
        }
    </style>
</head>

<body>

<div class="form-container">
<?php include('./menu.php');?>
    <h1 class="text-center">สถานะเครื่องวิทยุ</h1>

    <div class="text-center status">
        <p>จำนวนเครื่องทั้งหมด: <strong><?php echo $total_count; ?></strong></p>
        <p>จำนวนเครื่องที่ใช้งานแล้ว: <strong><?php echo $used_count; ?></strong></p>
        <p>จำนวนเครื่องที่ยังคงเหลือ: <strong><?php echo $remaining_count; ?></strong></p>
    </div>

    <h2 class="mt-4">รายละเอียดการยืมเครื่องวิทยุ</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ภารกิจ</th>
                <th scope="col">จำนวนเครื่องที่ยืม</th>
                <th scope="col">ระยะเวลา (วัน)</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        // เรียกใช้ข้อมูลและแสดงในตาราง
        if ($date_result && $date_result->num_rows > 0) {
            while ($row = $date_result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>{$row['id']}</th>"; // ใช้ $row['id'] เป็นลำดับ
                echo "<td>{$row['mission']}</td>";
                echo "<td>{$row['how_many']}</td>";
                echo "<td>{$row['days_remaining']}</td>"; // ใช้ days_remaining แทน
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' class='text-center'>ไม่มีข้อมูลการยืมเครื่องวิทยุ</td></tr>";
        }
        ?>
        </tbody>
      </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
