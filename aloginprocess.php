<?php 
require 'aloginconfig.php'; // Include your database connection file
session_start(); // Start the session

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $adminEmail = $_POST['adEmail'];
    $adminPassword = $_POST['adPassword'];

    // Check if all fields are required
    if (!empty($adminEmail) && !empty($adminPassword)) {
        // Validate email format
        if (filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
            // Escape user input to prevent SQL injection
            $adminEmail = mysqli_real_escape_string($con, $adminEmail);
            
            // Query to find the admin
            $sql = "SELECT adminID, adminName, adminEmail, adminPassword FROM alogindetails WHERE adminEmail = '$adminEmail'";
            $result = mysqli_query($con, $sql);

            // Check if the admin with the given email exists
            if (mysqli_num_rows($result) > 0) {
                // Fetch the admin details
                $row = mysqli_fetch_assoc($result);
                $adID = $row['adminID'];
                $adName = $row['adminName'];
                $dbPassword = $row['adminPassword']; // Get the password from the DB

                // Verify the password
                if ($adminPassword == $dbPassword) { // Compare plain-text passwords
                    // Set session variables
                    $_SESSION['adminID'] = $adID;
                    $_SESSION['adminName'] = $adName;
                    $_SESSION['adminEmail'] = $adminEmail;

                    // Redirect to admin profile (adjust the path if needed)
                    header("Location: adminDash.php");
                    exit();
                } else {
                    // If password does not match
                    echo "<script>alert('Invalid password');</script>";
                    header("Location: adminLogin.php?error=" . urlencode("Invalid password"));
                    exit();
                }
            } else {
                echo "<script>alert('No account found with that email');</script>";
                header("Location: adminLogin.php?error=" . urlencode("No account found"));
                exit();
            }
        } else {
            echo "<script>alert('Invalid email format');</script>";
            header("Location: adminLogin.php?error=" . urlencode("Invalid email format"));
            exit(); 
        }
    } else {
        header("Location: adminLogin.php?error=" . urlencode("All fields are required"));
        exit(); 
    }
}

// Close the database connection
mysqli_close($con);
?>
