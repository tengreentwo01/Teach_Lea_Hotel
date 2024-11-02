<?php
session_start(); // เริ่มต้นเซสชัน

include '../model/DB.php'; // รวมไฟล์เชื่อมต่อฐานข้อมูล

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// ตรวจสอบตัวแปรเซสชัน 'username' และ 'status'
if (!isset($_SESSION['username']) || !isset($_SESSION['status'])) {
    session_destroy();
    header("Location: ../backend/index.php");
    exit();
}

// ตรวจสอบสถานะผู้ใช้
if ($_SESSION['status'] != 2) {
    // หากสถานะไม่ใช่ 2 ให้เปลี่ยนเส้นทางไปยังหน้า admin
    header("Location: ../backend/admin.php");
    exit();
}

// ดึงข้อมูลผู้ใช้จากฐานข้อมูล
$sql = "SELECT * FROM users";
$user_result = $conn->query($sql);

// ตรวจสอบข้อผิดพลาดจากการรัน SQL
if ($user_result === false) {
    die("คำสั่ง SQL ล้มเหลว: " . $conn->error);
}

// ตรวจสอบว่ามีข้อมูลผู้ใช้หรือไม่
if ($user_result->num_rows > 0) {
    // สามารถประมวลผลข้อมูลผู้ใช้ได้ที่นี่
    while ($row = $user_result->fetch_assoc()) {
        // ทำอะไรกับข้อมูลผู้ใช้ เช่น เก็บในอาร์เรย์ หรือแสดงผล
    }
} else {
    echo "ไม่พบข้อมูลผู้ใช้";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
