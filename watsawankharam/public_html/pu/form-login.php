<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>เข้าสู่ระบบ</h1>
    <form action="process-login.php" method="POST">
        <div>
            <input name="email_account" type="email" placeholder="อีเมล" required>
        </div>
        <div>
            <input name="password_account" type="password" placeholder="รหัสผ่าน" required>
        </div>
        <button type="submit">เข้าสู่ระบบ</button>
        <a href="form-register.php">สร้างบัญชีใหม่</a>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">เข้าสู่ระบบ</h1>
        <form action="process-login.php" method="POST">
            <div class="mb-3">
                <input name="email_account" type="email" class="form-control" placeholder="อีเมล" required>
            </div>
            <div class="mb-3">
                <input name="password_account" type="password" class="form-control" placeholder="รหัสผ่าน" required>
            </div>
            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            <a href="form-register.php" class="d-block mt-3 text-center">สร้างบัญชีใหม่</a>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) - If you need Bootstrap JavaScript functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
