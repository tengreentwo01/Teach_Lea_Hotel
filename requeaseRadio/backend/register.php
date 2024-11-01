<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007bff;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>สมัครสมาชิก</h2>
    <form action="../control/register.php" method="POST" onsubmit="return confirmSubmission();">
        <input type="text" name="name" placeholder="ชื่อ-นามสกุล" required>
        <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
        <input type="password" name="passing" placeholder="รหัสผ่าน" required>
        <input type="submit" value="สมัครสมาชิก">
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function confirmSubmission() {
        // รับค่าจากฟอร์ม
        const input_name = document.querySelector('input[name="name"]').value;
        const input_username = document.querySelector('input[name="username"]').value;
        const input_password = document.querySelector('input[name="passing"]').value;

        // แสดง alert
        alert(`ชื่อ-นามสกุล: ${input_name}\n\nข้อมูลที่ส่ง:\nUsername: ${input_username}\nPassword: ${input_password}`);

        return true; // คืนค่า true เพื่อส่งฟอร์ม
    }
</script>

</body>
</html>
