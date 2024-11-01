<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'username' and 'status' are set in $_SESSION
if (isset($_SESSION['username'], $_SESSION['status'])) {
    // Check if 'status' is not empty
    if (!empty($_SESSION['status'])) {
        // เปลี่ยนเส้นทางไปยัง admin2.php
        header("Location: ../backend/admin2.php");
        exit(); // จบการทำงานของสคริปต์
    } else {
        // ทำลายเซสชัน
        session_destroy();
        // ลิ้งค์ไปยังหน้า admin.php
        header("Location: ../backend/admin.php");
        exit(); // จบการทำงานของสคริปต์
    }
} else {
    echo "Username or status not set in session.";
    // ทำลายเซสชัน
    session_destroy();
    // ลิ้งค์ไปยังหน้า admin.php
    header("Location: ../backend/admin.php");
    exit(); // จบการทำงานของสคริปต์
}
?>



<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ร้องเรียน Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFFCC;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        h1 {
            color: #005CA2;
        }
        .btn-primary {
            background-color: #005CA2;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0099FF;
        }
        .form-label {
            color: #005CA2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">เข้าสู่ระบบ</h1>
    <form method="post" action="../control/login.php" onsubmit="return confirmSubmission();">
        <div class="mb-3">
            <label for="usrname" class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" id="usrname" required>
        </div>

        <div class="mb-3">
            <label for="passing" class="form-label">Password:</label>
            <input type="password" class="form-control" name="passing" id="passing" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmSubmission() {
        // รับค่าจากฟอร์ม
        const input_username = document.querySelector('input[name="username"]').value;
        const input_password = document.querySelector('input[name="passing"]').value;
    
        // แสดง alert
        alert(`ข้อมูลที่ส่ง:\nUsername: ${input_username}\nPassword: ${input_password}`);

        return true; // คืนค่า true เพื่อส่งฟอร์ม
    }
</script>
</body>
</html>
