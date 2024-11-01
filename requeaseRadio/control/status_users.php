<?php
session_start();
include '../model/DB.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update status in the database
    $sql = "UPDATE `rongtook`.`users` SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $status, $id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "สถานะถูกปรับปรุงเรียบร้อยแล้ว";
    } else {
        $_SESSION['error_message'] = "เกิดข้อผิดพลาดในการปรับปรุงสถานะ: " . $stmt->error;
    }

    $stmt->close();
    header("Location: ../backend/persion.php"); // Redirect back to the main page
    exit();
}

// Close connection
$conn->close();
?>
