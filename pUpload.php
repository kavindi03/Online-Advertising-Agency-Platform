<?php 
// Include database connection file
include 'pConfig.php';

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Handle form submission based on the form type
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and escape form fields to prevent SQL Injection
    $owner = mysqli_real_escape_string($con, $_POST['owner']);
    $paymentDescription = mysqli_real_escape_string($con, $_POST['payment_description']);
    
    // Initialize SQL query variable
    $sql = '';

    // Check if the file has been uploaded without errors
    if (isset($_FILES['payment_slip']) && $_FILES['payment_slip']['error'] === UPLOAD_ERR_OK) {
        // Get temporary file path
        $fileTmpPath = $_FILES['payment_slip']['tmp_name'];
        $fileType = mime_content_type($fileTmpPath);
        $fileSize = $_FILES['payment_slip']['size'];
        
        // Ensure the file is of a valid size (max 5MB) and type (image or PDF)
        if ($fileSize <= 5000000 && ($fileType == 'image/jpeg' || $fileType == 'image/png' || $fileType == 'application/pdf')) {
            // Read file contents and escape the binary data to safely insert into the database
            $paymentSlip = addslashes(file_get_contents($fileTmpPath));

            // Prepare SQL query to insert payment data
            $sql = "INSERT INTO slippayments (owner_name, payment_description, payment_slip) 
                    VALUES ('$owner', '$paymentDescription', '$paymentSlip')";
        } else {
            // Invalid file type or size error
            echo "<script>alert('Invalid file type or file too large. Only JPG, PNG, and PDF up to 5MB are allowed.'); window.location.href='../abc/payment.php';</script>";
            $con->close();
            exit();
        }
    } else {
        // File upload error
        echo "<script>alert('Error uploading payment slip file.'); window.location.href='../sakura/payment.php';</script>";
        $con->close();
        exit();
    }

    // Execute the SQL query and check if it was successful
    if ($sql && $con->query($sql) === TRUE) {
        // Success message and redirect
        echo "<script>alert('Payment details saved successfully!'); window.location.href='../sakura/home.php';</script>";
        $con->close();
        exit();
    } else {
        // SQL error handling
        echo "<script>alert('Error: " . $con->error . "'); window.location.href='../sakura/payment.php';</script>";
        $con->close();
        exit();
    }
} else {
    // If the request method is not POST, redirect to the payment form
    echo "<script>alert('Invalid request method.'); window.location.href='../sakura/payment.php';</script>";
}
?>
