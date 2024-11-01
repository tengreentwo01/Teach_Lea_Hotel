<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rongtook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // ตั้งค่าการเข้ารหัสเป็น utf8mb4
    $conn->set_charset("utf8mb4");
}

// ตอนนี้สามารถทำงานกับฐานข้อมูลได้แล้ว
?>
