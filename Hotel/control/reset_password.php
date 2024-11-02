<?php
// เริ่มต้นเซสชัน
session_start();
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_GET['id'] ?? null;

if ($userId) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('ไม่พบผู้ใช้'); window.history.back();</script>";
        exit();
    }
    $stmt->close();
} else {
    echo "<script>alert('ID ไม่ถูกต้อง'); window.history.back();</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปลี่ยนรหัสผ่าน</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007bff;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .cancel-button {
            background-color: #ccc;
            margin-top: 5px;
        }
        .cancel-button:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

<div class="container">
<h1>เปลี่ยนรหัสผ่านของ: <?php echo htmlspecialchars($row['name']); ?></h1>
   
    
    <form action="../control/save_pw.php" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($userId); ?>">
        <label for="passing">รหัสผ่านใหม่:</label>
        <input type="password" name="passing" required>
        <button type="submit">บันทึก</button>
        <button type="button" class="cancel-button" onclick="window.close();">ยกเลิก</button>
    </form>
</div>

</body>
</html>
