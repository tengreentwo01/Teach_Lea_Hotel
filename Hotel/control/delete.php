<?php
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบว่ามีการส่ง ID มาหรือไม่
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // แปลงเป็นจำนวนเต็มเพื่อป้องกัน SQL Injection

    // ใช้ prepared statement เพื่อลบข้อมูล
    $stmt = $conn->prepare("DELETE FROM `hotel`.`mission` WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // ลบสำเร็จ
        $_SESSION['message'] = "ลบข้อมูลเรียบร้อยแล้ว";
    } else {
        // ลบไม่สำเร็จ
        $_SESSION['message'] = "เกิดข้อผิดพลาดในการลบข้อมูล: " . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "ID ไม่ถูกต้อง";
}

// ปิดการเชื่อมต่อ
$conn->close();

// เปลี่ยนเส้นทางกลับไปยังหน้าหลัก
header("Location: ../backend/member.php"); // เปลี่ยนเส้นทางที่ต้องการ
exit();
?>
