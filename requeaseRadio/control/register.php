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

// ตรวจสอบชื่อผู้ใช้ซ้ำ
$stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ? OR name = ?");
$stmt->bind_param("ss", $username, $name); // 'ss' หมายถึง string, string
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if ($count > 0) {
    echo "<script>alert('ชื่อผู้ใช้หรือชื่อ-นามสกุลซ้ำ กรุณาเลือกใหม่'); window.history.back();</script>";
    exit();
}

// เตรียมคำสั่ง SQL เพื่อแทรกข้อมูล
$stmt = $conn->prepare("INSERT INTO users (name, username, passing, status) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    die("เตรียมคำสั่ง SQL ล้มเหลว: " . $conn->error);
}

// ใช้ bind_param เพื่อผูกค่ากับคำสั่ง SQL
$stmt->bind_param("sssi", $name, $username, $passing, $status); // 'sssi' หมายถึง string, string, string, integer

if ($stmt->execute()) {
    // Registration successful
    echo "<script>
        alert('สมัครสมาชิกสำเร็จ!');
        window.location.href = '../backend/admin.php';
    </script>";
    exit();
} else {
    // Registration failed
    echo "เกิดข้อผิดพลาด: " . $stmt->error;
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>
