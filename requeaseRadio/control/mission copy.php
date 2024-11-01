<?php
// รวมไฟล์การเชื่อมต่อฐานข้อมูล
require_once '../model/DB.php'; // เชื่อมต่อฐานข้อมูล

// เช็คว่ามีการส่งข้อมูลมาจริงหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจากฟอร์ม
    $type = $_POST['type']; // ประเภท
    $mission = $_POST['mission']; // ชื่อภารกิจ
    $how_many = (int)$_POST['how_many']; // จำนวน
    $date1 = $_POST['date1']; // วันที่เริ่ม
    $date2 = $_POST['date2']; // วันที่สิ้นสุด
    $file = $_POST['file']; // ไฟล์เก็บไว้ที่ uploads
    $name_responsible = $_POST['name_responsible']; // ชื่อผู้รับผิดชอบ
    $status = 1; // กำหนดสถานะ (ตัวอย่าง เช่น 1)

    // สร้าง SQL สำหรับการบันทึกข้อมูลในตาราง mission
    $sql = "INSERT INTO mission (type, mission, how_many, name_responsible, status, date ,file) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    
    if ($stmt === false) {
        die("เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error);
    }

    // ผูกค่ากับตัวแปร
    $stmt->bind_param("ssiiss", $type, $mission, $how_many, $name_responsible, $status, $date1, $date2, $file); 

    // ตรวจสอบการบันทึกข้อมูล
    if ($stmt->execute()) {
        echo "<script>alert('บันทึกข้อมูลสำเร็จ!'); window.location.href='../index.php';</script>";
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
    $conn->close();
} else {
    echo "ไม่มีข้อมูลส่งมา!";
}
?>
