<?php
require 'pConfig.php';

if (isset($_GET['cNumber'])) {
    // Get the card number from the URL
    $cNumber = $_GET['cNumber'];

    // Prepare the SQL statement to delete the record using a prepared statement
    $sql = "DELETE FROM payments WHERE cNumber = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $cNumber); // 's' for string binding

    // Execute the query and check if successful
    if ($stmt->execute()) {
        // Redirect back to the read page or display success message
        header("Location: pRead.php"); // Redirect after deletion
        exit(); // Ensure no further code is executed
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No card number provided!";
}

$con->close();
?>
