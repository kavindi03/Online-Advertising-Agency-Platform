<?php
require 'pConfig.php';

$cNumber = $_POST["cdNumber"];
$cName = $_POST["cdName"];
$exdate = $_POST["cdDate"];
$cvv = $_POST["cdCvv"];

// Insert into the table with 'payment_status' column
$sql = "INSERT INTO payments (cNumber, cName, exdate, cvv, payment_status) VALUES ('$cNumber', '$cName', '$exdate', '$cvv', 'Pending')";

if ($con->query($sql)) {
    header("Location: home.php"); // Redirect to homepage on success
    exit();
} else {
     // Redirect back to the payment page with an error message as query parameter
     header("Location: payment.php?error=" . urlencode("Payment processing failed. Please try again."));
     exit();
}

$con->close();
?>
