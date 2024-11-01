<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$name = $_POST['name'] ?? '';
$username = $_POST['username'] ?? '';
$passing = $_POST['passing'] ?? '';
$status = 0;

// เตรียมคำสั่ง SQL โดยใช้ prepared statements
$stmt = $conn->prepare("INSERT INTO users (name, username, passing, status) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    die("เตรียมคำสั่ง SQL ล้มเหลว: " . $conn->error);
}

$stmt->bind_param("ssii", $name, $username, $passing, $status); // 'ssii' หมายถึง string, string, string, integer

if ($stmt->execute()) {
    echo "สมัครสมาชิกสำเร็จ!";
    header("Location: ../backend/admin.php");
} else {
    echo "เกิดข้อผิดพลาด: " . $stmt->error;
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>
