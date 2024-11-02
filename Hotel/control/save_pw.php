<?php
session_start();
include '../model/DB.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $passing = $_POST['passing'];

    // Update password in the database
    $sql = "UPDATE `hotel`.`users` SET passing = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $passing, $id); // Use "si" for string and integer

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "รหัสผ่านถูกปรับปรุงเรียบร้อยแล้ว";
    } else {
        $_SESSION['error_message'] = "เกิดข้อผิดพลาดในการปรับปรุงรหัสผ่าน: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Return success response
    echo "<script>
            alert('" . ($_SESSION['success_message'] ?? $_SESSION['error_message']) . "');
            window.close(); // Close the window after alert
          </script>";
    exit();
}

// Close connection
$conn->close();
?>
