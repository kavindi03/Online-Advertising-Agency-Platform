<?php
require 'fconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];  // This is readonly, so we expect the email from the form
    $feedback = $_POST['feedback'];

    // Prepare the SQL statement for updating the record
    $sql = "UPDATE feedbacknew SET name = ?, feedback = ? WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $name, $feedback, $email);

    // Execute and check for success
    if ($stmt->execute()) {
        // Redirect to feedbackRead.php after successful update
        header("Location: feedbackRead.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
?>
