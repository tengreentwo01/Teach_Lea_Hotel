<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watsawankharam"; // Added a semicolon at the end of the line

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Used $dbname variable
  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
