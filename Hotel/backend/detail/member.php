<?php
include '../model/DB.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ตรวจสอบการตั้งค่า 'username' และ 'status' ใน $_SESSION
if (!isset($_SESSION['username'], $_SESSION['status']) || empty($_SESSION['status'])) {
    session_destroy();
    header("Location: ../backend/admin.php");
    exit();
}

// ดึงข้อมูลสมาชิกจากฐานข้อมูล
$sql = "SELECT * FROM users";
$user_result = $conn->query($sql);

// ปิดการเชื่อมต่อ
$conn->close();
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Management Member</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Member</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third-party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ชื่อ</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>ตึก/ห้อง</th>
                            <th>เข้าวันที่</th>
                            <th>วันสิ้นสุด</th>
                            <th>สถานะ</th>
                            <th>แก้ไขรหัสผ่าน</th>
                            <th>ลบบัญชี</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ชื่อ</th>
                            <th>ชื่อผู้ใช้</th>
                            <th>ตึก/ห้อง</th>
                            <th>เข้าวันที่</th>
                            <th>วันสิ้นสุด</th>
                            <th>สถานะ</th>
                            <th>แก้ไขรหัสผ่าน</th>
                            <th>ลบบัญชี</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        // เรียกใช้ข้อมูลสมาชิกและแสดงในตาราง
                        if ($user_result && $user_result->num_rows > 0) {
                            while ($row = $user_result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td>
                                       <form action='../control/status_users.php' method='POST' class='form-inline'>
                                            <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                                            <select name='status' id='status' class=''>
                                                <option value='0' " . ($row['status'] == 0 ? 'selected' : '') . ">ไม่เปิดใช้งาน</option>
                                                <option value='1' " . ($row['status'] == 1 ? 'selected' : '') . ">ผู้เยี่ยมชม</option>
                                                <option value='2' " . ($row['status'] == 2 ? 'selected' : '') . ">ผู้ดูแลระบบ</option>
                                            </select>
                                            <button type='submit' class=''>บันทึก</button>
                                       </form>
                                    </td>";
                                echo "<td>
                                        <a href='#' onclick='openResetpwWindow(" . htmlspecialchars($row['id']) . "); return false;'>เปลี่ยนรหัสผ่าน</a>
                                    </td>";
                                echo "<td>
                                        <a href='../control/delete_user.php?id=" . htmlspecialchars($row['id']) . "' onclick='return confirmDelete();'>ลบ</a>
                                    </td>";
                                echo "</tr>";
                                
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>ไม่มีสมาชิก</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<script>
function confirmDelete() {
    return confirm("คุณแน่ใจหรือไม่ว่าต้องการลบสมาชิกนี้?");
}

// function openResetpwWindow(userId) {
    
//         // Open a new window for password reset
//         window.open('../control/reset_password.php?id=' + userId, 'Reset Password', 'width=400,height=300');
//     }
    function openResetpwWindow(userId) {
    const width = 600; // กว้างของหน้าต่างใหม่
    const height = 600; // สูงของหน้าต่างใหม่
    const left = (window.innerWidth / 2) - (width / 2); // ตำแหน่งซ้าย
    const top = (window.innerHeight / 2) - (height / 2) + 100; // ตำแหน่งด้านบน (เพิ่ม 100 เพื่อให้ห่างจากขอบบน)

    // เปิดหน้าต่างใหม่
    window.open('../control/reset_password.php?id=' + userId, 'Reset Password', `width=${width},height=${height},top=${top},left=${left}`);
}
     

        
    </script>";


