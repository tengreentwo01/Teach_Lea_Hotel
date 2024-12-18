<?php
session_start();
include '../model/DB.php';

// Assuming you have already established a database connection $conn
// Checking if session variables are set and redirecting accordingly
if (!empty($_SESSION['username'])) {
    header("Location: ../backend/index.php");
    exit();
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['passing'];
    
    // Use prepared statement to prevent SQL injection
    $sql = "SELECT username, passing, name, status
            FROM hotel.users
            WHERE username = ?
            AND passing = ?
            AND (status = '1' OR status = '2')";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $inputUsername, $inputPassword);
    $stmt->execute();
    $stmt->bind_result($resultUsername, $resultPassword, $resultName, $resultStatus);
    $stmt->fetch();
    
    // Check if authentication is successful
    if ($resultUsername && $resultPassword) {
        // Authentication successful
        $_SESSION['username'] = $resultUsername;
        $_SESSION['status'] = $resultStatus; // Set the actual status from the database
        header("Location: ../backend/index.php");
        exit();
    } else {
        // Authentication failed
        $error_message = "Invalid username or password!";
    }
    
    $stmt->close();
}

// If session variables are not set and form is not submitted, display error message
if (isset($error_message)) {
    echo "
        <br><br><br>
        <div align='center'>{$error_message}</div>
        <div align='center'>WAIT 5 seconds.</div>
    ";
    header("refresh:5; url=../backend/index.php"); // Redirect after 5 seconds
} else {
    echo "
        <br><br><br>
        <div align='center'>Please check your username and password.</div>
        <div align='center'>WAIT 5 seconds.</div>
    ";
    header("refresh:5; url=../backend/index.php"); // Redirect after 5 seconds
}

$conn->close();
?>
