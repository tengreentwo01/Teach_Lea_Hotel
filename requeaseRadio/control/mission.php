<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'username' and 'status' are set in $_SESSION
if (!isset($_SESSION['username'], $_SESSION['status']) || empty($_SESSION['status'])) {
    // ทำลายเซสชัน
    session_destroy();
    header("Location: ../backend/admin.php");
    die();
}

// ตรวจสอบว่ามีการส่งฟอร์มหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบการอัปโหลดไฟล์
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // อนุญาตเฉพาะไฟล์ประเภทที่กำหนด
        $allowedfileExtensions = array('pdf', 'doc', 'docx', 'jpg', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // สร้างชื่อไฟล์ใหม่เพื่อหลีกเลี่ยงการชนกัน
            $newFileName = uniqid('', true) . '.' . $fileExtension;

            // เส้นทางในการบันทึกไฟล์
            $uploadFileDir = '../public/uploads/';
            
            // ตรวจสอบว่ามีไดเรกทอรีหรือไม่
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true); // สร้างไดเรกทอรีถ้ายังไม่มี
            }

            $dest_path = $uploadFileDir . $newFileName;

            // ย้ายไฟล์ที่อัปโหลดไปยังตำแหน่งที่กำหนด
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // เตรียมข้อมูลที่จะบันทึกในฐานข้อมูล
                $type = $_POST['type'];
                $mission = $_POST['mission'];
                $how_many = $_POST['how_many'];
                $date1 = $_POST['date1'];
                $date2 = $_POST['date2'];
                $name_responsible = $_POST['name_responsible'];
                $status = 0;

                // บันทึกข้อมูลลงในฐานข้อมูล (ตัวอย่างคำสั่ง SQL)
                $sql = "INSERT INTO `rongtook`.`mission` (type, mission, how_many, date1, date2, file, name_responsible, status) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssisssss", $type, $mission, $how_many, $date1, $date2, $newFileName, $name_responsible, $status);

                if ($stmt->execute()) {
               
                    $_SESSION['success_message'] = "คำร้องขอถูกส่งเรียบร้อยแล้ว";
            
                
                    // Display a success message with a styled button
                    echo "
                    <!DOCTYPE html>
                    <html lang='th'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
                        <title>สำเร็จ</title>
                        <style>
                            body {
                                background-color: #f4f4f4;
                            }
                            .container {
                                margin-top: 50px;
                                text-align: center;
                            }
                            .alert {
                                margin-bottom: 20px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class='container'>
                            <div class='alert alert-success'>" . $_SESSION['success_message'] . "</div>
                            <a href='../backend/admin2.php' class='btn btn-primary'>กลับหน้าหลัก</a>
                        </div>
                    </body>
                    </html>
                    ";
                
                    exit(); // Ensure no further code is executed after redirect
                } else {
                    echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error;
                }
                
            } else {
                echo "ไม่สามารถย้ายไฟล์ที่อัปโหลดได้.";
            }
        } else {
            echo "ประเภทไฟล์ที่อัปโหลดไม่ถูกต้อง.";
        }
    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์.";
    }
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
