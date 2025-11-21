<?php
require 'pConfig.php';

// Check if card number is provided
if (isset($_GET['cNumber'])) {
    $cNumber = $_GET['cNumber'];

    // Fetch the current payment details based on the card number
    $sql = "SELECT cNumber, cName, exdate, cvv, payment_status FROM payments WHERE cNumber = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $cNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if payment record exists
    if ($result->num_rows > 0) {
        $payment = $result->fetch_assoc(); // Fetch the data as an associative array
    } else {
        echo "No record found!";
        exit();
    }

    $stmt->close();
} else {
    echo "No card number provided!";
    exit();
}

// Handle form submission to update payment details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cName = $_POST["cdName"];
    $exdate = $_POST["cdDate"];
    $cvv = $_POST["cdCvv"];
    $payment_status = $_POST["payment_status"];

    // Prepare the SQL update statement
    $sql = "UPDATE payments SET cName = ?, exdate = ?, cvv = ?, payment_status = ? WHERE cNumber = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $cName, $exdate, $cvv, $payment_status, $cNumber);

    if ($stmt->execute()) {
        echo "Payment details updated successfully!";
        header("Location: pRead.php"); // Redirect to the read page
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment</title>
    <link rel='stylesheet' type='text/css' media='screen' href='payment\crud/pUpdate.css'>
</head>
<body>

<h1>Edit Payment Details</h1>
<div class="form-container">

<form method="POST" action="">
    <div class="input-group">
        <label for="cNumber">Card Number (Read-Only)</label>
        <input type="text" id="cNumber" name="cdNumber" value="<?php echo $payment['cNumber']; ?>" readonly>
    </div>
    <div class="input-group">
        <label for="cdName">Card Holder's Name</label>
        <input type="text" id="cdName" name="cdName" value="<?php echo $payment['cName']; ?>" required>
    </div>
    <div class="input-group">
        <label for="cdDate">Expiry Date</label>
        <input type="text" id="cdDate" name="cdDate" value="<?php echo $payment['exdate']; ?>" required>
    </div>
    <div class="input-group">
        <label for="cdCvv">CVV</label>
        <input type="text" id="cdCvv" name="cdCvv" value="<?php echo $payment['cvv']; ?>" required>
    </div>
    <div class="input-group">
        <label for="payment_status">Payment Status</label>
        <select id="payment_status" name="payment_status">
            <option value="Pending" <?php if($payment['payment_status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Completed" <?php if($payment['payment_status'] == 'Completed') echo 'selected'; ?>>Completed</option>
            <option value="Failed" <?php if($payment['payment_status'] == 'Failed') echo 'selected'; ?>>Failed</option>
        </select>
    </div>
    
    <button type="submit" class="btn">Save</button>
</form>
</div>
</body>
</html>
