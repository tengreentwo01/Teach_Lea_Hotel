<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบการตั้งค่า 'username' และ 'status' ใน $_SESSION
if (!isset($_SESSION['username'], $_SESSION['status']) || empty($_SESSION['status'])) {
    session_destroy();
    header("Location: ../backend/admin.php");
    
    exit();
}

// แสดงชื่อผู้ใช้
echo "Username: " . htmlspecialchars($_SESSION['username']) . " ";
echo "<a href='../control/logout.php'>Log Off</a>";

// จำนวนเครื่องทั้งหมด
$total_count = 100;

// ดึงข้อมูลการยืมเครื่องวิทยุจากฐานข้อมูล โดยคำนวณเฉพาะเมื่อสถานะเป็น 1
$sql = "SELECT SUM(how_many) AS used_count FROM `rongtook`.`mission` ";
$result = $conn->query($sql);
$used_count = $result ? ($result->fetch_assoc()['used_count'] ?? 0) : 0;
$remaining_count = $total_count - $used_count; // คำนวณจำนวนเครื่องที่เหลือ

// ดึงรายละเอียดการยืมเครื่องวิทยุพร้อมวันหมดอายุ
$date_sql = "SELECT *, DATEDIFF(date2, NOW()) AS days_remaining
             FROM `rongtook`.`mission`
             WHERE DATEDIFF(date2, NOW()) >= 0
             ORDER BY id DESC";

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
            height: 100%;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h1 {
            color: #003366; /* Dark Blue */
        }
        .status {
            font-size: 1.2em;
            color: #00509e; /* Lighter Blue */
        }
        .table th, .table td {
            vertical-align: middle; /* Center vertically */
            text-align: center; /* Center horizontally */
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h1 class="text-center">สถานะเครื่องวิทยุ</h1>
    <div class="text-center status">
        <p>จำนวนเครื่องทั้งหมด: <strong><?php echo $total_count; ?></strong></p>
        <p>จำนวนเครื่องที่ใช้งานแล้ว: <strong><?php echo $used_count; ?></strong></p>
        <p>จำนวนเครื่องที่ยังคงเหลือ: <strong><?php echo $remaining_count; ?></strong></p>
    </div>

    <h2 class="mt-4">รายละเอียดการยืมเครื่องวิทยุ</h2>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ภารกิจ</th>
                <th scope="col">จำนวนเครื่องที่ยืม</th>
                <th scope="col">ระยะเวลา (วัน)</th>
                <th scope="col">เปลี่ยนสถานะ</th>
                <th scope="col">ไฟล์</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // เรียกใช้ข้อมูลและแสดงในตาราง
        if ($date_result && $date_result->num_rows > 0) {
            while ($row = $date_result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>{$row['id']}</th>";
                echo "<td>" . htmlspecialchars($row['mission']) . "</td>";
                echo "<td>{$row['how_many']}</td>";
                echo "<td>{$row['days_remaining']}</td>";
                echo "<td>
                        <form action='../control/update_status.php' method='POST' class='form-inline' onsubmit='return confirmStatusChange();'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <div class='form-check form-check-inline'>
                                <input class='form-check-input' type='radio' name='status' value='1' " . ($row['status'] ? 'checked' : '') . ">
                                <label class='form-check-label'>เปิด</label>
                            </div>
                            <div class='form-check form-check-inline'>
                                <input class='form-check-input' type='radio' name='status' value='0' " . (!$row['status'] ? 'checked' : '') . ">
                                <label class='form-check-label'>ปิด</label>
                            </div>
                            <button type='submit' class='btn btn-primary btn-sm'>บันทึก</button>
                        </form>
                    </td>";
                echo "<td><a href='../public/uploads/{$row['file']}' target='_blank'>📁</a></td>";
                echo "<td><a href='../control/delete.php?id={$row['id']}' onclick='return confirmDelete();'>ลบข้อมูล</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลการยืมเครื่องวิทยุ</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="admin_Form.php" class="btn btn-link">คำขอยืมใช้ วิทยุ ต่อภารกิจ</a>
    </div>
</div>

<script>
function confirmStatusChange() {
    return confirm("คุณแน่ใจหรือไม่ว่าต้องการเปลี่ยนสถานะ?");
}
function confirmDelete() {
    return confirm("คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูล?");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
