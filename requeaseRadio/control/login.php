<?php
session_start();
include '../model/DB.php';

// Assuming you have already established a database connection $conn

// Checking if session variables are set and redirecting accordingly
if (!empty($_SESSION['username']) && !empty($_SESSION['passing'])) {
    header("Location: ../backend/admin2.php");
    exit();
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['passing'];
    
    // // Use prepared statement to prevent SQL injection
    $sql = "SELECT username, passing, name, status
            FROM rongtook.users
            WHERE username = ?
            AND passing = ?
            AND status = 1";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $inputUsername, $inputPassword);
    $stmt->execute();
    $stmt->bind_result($resultUsername, $resultPassword, $resultName, $resultStatus);
    $stmt->fetch();
    
    if ($resultUsername && $resultPassword) {
        // Authentication successful
        $_SESSION['username'] = $resultUsername;
        $_SESSION['status'] = 1;
        header("Location: ../backend/admin2.php");
        exit();
    } else {
        // Authentication failed
        $error_message = "Invalid username or password!";
    }
    
    $stmt->close();
}

// If session variables are not set and form is not submitted, display error message
$error_message = "
                    </br></br></br>
                    <div align='center'>Please check your username and password.</div>
                     <div align='center'>WAIT 5 min.</div>
                  ";

echo $error_message; // Display the error message
header("refresh:5; url=../backend/admin.php"); // Redirect after 5 seconds

$conn->close();
?>
