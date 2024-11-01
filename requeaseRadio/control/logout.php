<?php
// เริ่มต้นเซสชัน
session_start();

// ทำลายเซสชัน
session_destroy();

// เปลี่ยนเส้นทางไปยังหน้า admin.php
header("Location: ../backend/admin.php");

// หยุดการทำงานของสคริปต์
exit();
?>
