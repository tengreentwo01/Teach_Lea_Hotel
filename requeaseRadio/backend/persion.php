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

// ดึงข้อมูลสมาชิกจากฐานข้อมูล
$sql = "SELECT * FROM users";
$user_result = $conn->query($sql);

// ปิดการเชื่อมต่อ
$conn->close();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อสมาชิก</title>
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
        .table th, .table td {
            vertical-align: middle; /* Center vertically */
            text-align: center; /* Center horizontally */
        }
    </style>
</head>

<body>
<div class="container mt-5">
<div class="form-container">
<?php include('./menu.php');?>
    <h1 class="text-center">รายชื่อสมาชิก</h1>

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
            
                <th scope="col">ชื่อ</th>
                <th scope="col">ชื่อผู้ใช้</th>
                <th scope="col">สถานะ</th>
                <th scope="col">แก้ไขรหัสผ่าน</th>
                <th scope="col">ลบบัญชี</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // เรียกใช้ข้อมูลสมาชิกและแสดงในตาราง
        if ($user_result && $user_result->num_rows > 0) {
            while ($row = $user_result->fetch_assoc()) {
                echo "<tr>";
               
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td>
                        <form action='../control/status_users.php' method='POST' class='form-inline'>
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
               
                    echo "<td>
                        <a href='#' onclick='openResetpwWindow({$row['id']}); return false;'>เปลี่ยนรหัสผ่าน</a>
                    </td>";
                echo "<td>
                        <a href='../control/delete_user.php?id={$row['id']}' onclick='return confirmDelete();'>ลบ</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>ไม่มีสมาชิก</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="admin_Form.php" class="btn btn-link">กลับไปที่หน้าหลัก</a>
    </div>
</div>
</div>

<script>
function confirmDelete() {
    return confirm("คุณแน่ใจหรือไม่ว่าต้องการลบสมาชิกนี้?");
}

// function openResetpwWindow(userId) {
    
//         // Open a new window for password reset
//         window.open('../control/reset_password.php?id=' + userId, 'Reset Password', 'width=400,height=300');
//     }
    function openResetpwWindow(userId) {
    const width = 600; // กว้างของหน้าต่างใหม่
    const height = 600; // สูงของหน้าต่างใหม่
    const left = (window.innerWidth / 2) - (width / 2); // ตำแหน่งซ้าย
    const top = (window.innerHeight / 2) - (height / 2) + 100; // ตำแหน่งด้านบน (เพิ่ม 100 เพื่อให้ห่างจากขอบบน)

    // เปิดหน้าต่างใหม่
    window.open('../control/reset_password.php?id=' + userId, 'Reset Password', `width=${width},height=${height},top=${top},left=${left}`);
}
     

        
    </script>";

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
