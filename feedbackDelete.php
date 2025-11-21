<?php
require 'fconfig.php';

if (isset($_GET['email'])) {
    // Get the email from the URL
    $cNumber = $_GET['email'];

    // Prepare the SQL statement to delete the record using a prepared statement
    $sql = "DELETE FROM feedbacknew WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $cNumber); // 's' for string binding

    // Execute the query and check if successful
    if ($stmt->execute()) {
        // Redirect back to the read page or display success message
        header("Location: feedbackRead.php"); // Redirect after deletion
        exit(); // Ensure no further code is executed
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No email is provided!";
}

$con->close();
?>
