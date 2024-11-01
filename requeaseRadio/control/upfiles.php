<?php
// Start session and include necessary files
session_start();
include '../model/DB.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file is uploaded successfully
    if (isset($_FILES['ifile']) && $_FILES['ifile']['error'] === UPLOAD_ERR_OK) {
        // Get user ID (assuming it's stored in the session)
        $userID = $_SESSION['user_id']; // Adjust this according to your session variable
        
        // Get current date
        $currentDate = date("d-m-Y");
        
        // Create folder path
        $folderPath = "../uploads/" . $userID . "/" . $currentDate . "/";
        
        // Create folder if it doesn't exist
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true); // Creates folder recursively with full permissions
        }
        
        // Generate unique file name
        $file_name = $_FILES['ifile']['name'];
        $file_tmp = $_FILES['ifile']['tmp_name'];
        $uniqueFileName = generateUniqueFileName($folderPath, $file_name);
        
        // Move the uploaded file to the desired directory
        $destination = $folderPath . $uniqueFileName;
        move_uploaded_file($file_tmp, $destination);
        
        // Output success message or perform further actions
        echo "File uploaded successfully!";
    } else {
        // Handle file upload errors here
        echo "File upload failed!";
    }
} else {
    // Handle non-POST requests here
    header("Location: ../admin.php");
    exit();
}

// Close database connection if necessary
$conn->close();

// Function to generate unique file name to avoid overwriting
function generateUniqueFileName($folderPath, $fileName) {
    $counter = 0;
    $uniqueFileName = $fileName;
    while (file_exists($folderPath . $uniqueFileName)) {
        $counter++;
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileNameWithoutExt = pathinfo($fileName, PATHINFO_FILENAME);
        $uniqueFileName = $fileNameWithoutExt . "_" . $counter . "." . $extension;
    }
    return $uniqueFileName;
}
?>
