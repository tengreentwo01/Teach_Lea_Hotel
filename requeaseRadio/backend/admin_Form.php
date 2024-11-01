<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if 'username' and 'status' are set in $_SESSION before echoing
if (isset($_SESSION['username'], $_SESSION['status'])) {
    // Check if 'status' is not empty
    if (!empty($_SESSION['status'])) {
        echo "Username: " . $_SESSION['username'];
        echo "      <a href='../control/logout.php'>Log Off</a>";
    } else {
        // ทำลายเซสชัน
        session_destroy();
        // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
        header("Location: ../backend/admin.php");
        // จบการทำงานของสคริปต์
        die();
    }
} else {
    echo "Username or status not set in session.";
    // ทำลายเซสชัน
    session_destroy();
    // ลิ้งค์ไปยังหน้าหลักหรือหน้าอื่นตามต้องการ
    header("Location: ../backend/admin.php");
    // จบการทำงานของสคริปต์
    die();
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <title>คำร้องขอใช้วิทยุ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* background-color: #403E68; */
            color: #E0E0E0;
        }

        .form-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            color: #003366; /* Dark Blue */
        }

        .btn-primary {
            background-color: #003366;
            border-color: #003366;
        }

        .btn-primary:hover {
            background-color: #00509e;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        h4 {
            color: #003366; /* Dark Blue */
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="form-container">
        
    <?php include('./menu.php');?>

        <h1 class="text-center">แบบฟอร์ม คำร้องขอใช้วิทยุ</h1>
        <p class="text-center">สถานภาพต่างๆ ที่หน่วยร้องขอและใช้ในภารกิจ</p>
        
        <form enctype="multipart/form-data" action="../control/mission.php" method="post" onsubmit="return confirmSubmission()">
            <div class="mb-3">
                <label for="type" class="form-label">* ประเภทเรื่องร้องเรียน</label>
                <input type="hidden" name="type" value="วิทยุ VHF">
                <p class="form-control" readonly>วิทยุ VHF</p>
            </div>

            <div class="mb-3">
                <label for="mission" class="form-label">* ภารกิจ</label>
                <input type="text" class="form-control" name="mission" placeholder="หัวข้อการฝึก" required>
            </div>

            <div class="mb-3">
                <label for="how_many" class="form-label">จำนวน</label>
                <input type="number" class="form-control" name="how_many" placeholder="จำนวนเครื่อง" min="1" max="100" required>
            </div>

            <div class="mb-3">
                <label for="date1" class="form-label">วันที่เริ่มยืม</label>
                <input type="date" class="form-control" name="date1" id="date1" required>
            </div>
            <div class="mb-3">
                <label for="date2" class="form-label">วันสิ้นสุดภารกิจ</label>
                <input type="date" class="form-control" name="date2" id="date2" required>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">เอกสารภารกิจ</label>
                <input type="file" class="form-control" name="file" id="file" accept=".pdf, .doc, .docx, .jpg, .png" required>
                <div class="form-text" id="file-name">กรุณาอัปโหลดเอกสารในรูปแบบ .pdf, .doc, .docx, .jpg, หรือ .png</div>
            </div>

            <div class="mb-3">
                <label for="name_responsible" class="form-label">ยศ ชื่อ-สกุล ผู้ประสงค์</label>
                <input type="text" class="form-control" name="name_responsible" placeholder="ชื่อผู้รับผิดชอบ หรือยื่นคำร้อง">
            </div>

            <div class="text-center">
            <a href="admin2.php" class="btn btn-link" ><img src="../public/img/home-logo-png-3.png" style="width: 3rem;"></a>
                <button type="submit" class="btn btn-primary">ส่งคำร้อง</button>
                <button type="reset" class="btn btn-secondary">คืนค่า</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmSubmission() {
        // รับค่าจากฟอร์ม
        const type = document.querySelector('input[name="type"]').value;
        const mission = document.querySelector('input[name="mission"]').value;
        const how_many = document.querySelector('input[name="how_many"]').value;
        const date1 = document.querySelector('input[name="date1"]').value;
        const date2 = document.querySelector('input[name="date2"]').value;
        const file = document.querySelector('input[name="file"]').value;
        const name_responsible = document.querySelector('input[name="name_responsible"]').value;

        // แสดง alert
        alert(`ข้อมูลที่ส่ง:\nประเภท: ${type}\nภารกิจ: ${mission}\nจำนวน: ${how_many}\nชื่อผู้รับผิดชอบ: ${name_responsible}\nวันที่: ${date1} - ${date2} \nชื่อไฟล์: ${file.split('\\').pop()}`); // Show only the filename

        return true; // คืนค่า true เพื่อส่งฟอร์ม
    }

    // Set the input value to today's date for the date inputs
    const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
    document.getElementById('date1').value = today; // Set the first date input to today
    document.getElementById('date2').value = today; // Set the second date input to today

    // Show only the filename when a file is selected
    document.getElementById('file').addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'ไม่มีไฟล์ที่เลือก';
        document.getElementById('file-name').textContent = fileName;
    });
</script>
</body>
</html>
