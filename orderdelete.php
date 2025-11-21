<?php
require 'order/orderconfig.php';

// Check if the Email is set in the URL
if (isset($_GET['Email'])) {
    $email = $_GET['Email'];

    // Fetch the order details from the database using Email
    $sql = "SELECT Name, Address, Email, Mobile, payment FROM orderdetails WHERE Email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email); // bind parameter as string
    $stmt->execute();
    $result = $stmt->get_result();
    $order = $result->fetch_assoc();

    if (!$order) {
        die("Order not found.");
    }
} else {
    die("Invalid request.");
}

// Check for delete request
if (isset($_POST["delete"])) {
    $email = $_POST["email"]; // Get the email from the form

    // Delete the order from the database using Email as the unique identifier
    $delete_sql = "DELETE FROM orderdetails WHERE Email = ?";
    $delete_stmt = $con->prepare($delete_sql);
    $delete_stmt->bind_param("s", $email); // bind parameter as string

    if ($delete_stmt->execute()) {
        echo "Order deleted successfully!";
        echo "<script>alert('Order deleted successfully!'); window.location.href='orderupdate.php';</script>"; // Alert message and redirect
        exit();
    } else {
        echo "Error deleting order: " . $delete_stmt->error;
    }

    // Close the statement
    $delete_stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
    <style>
        /* Basic CSS for the form */
        body {
            background-image: url('order/css/3.jpg'); /* Path to your image */
            background-size: cover; /* Ensures the image covers the entire area */
            background-position: center; /* Centers the background image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            background-color:#ffbcc0;

        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color:#ffbcc0;
        
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"], .delete-btn {
            background-color: #ff0404;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover, .delete-btn:hover {
            background-color: #c71212;
        }

        .back-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Delete Order</h1>
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($order['Name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($order['Address']); ?>" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo htmlspecialchars($order['Mobile']); ?>" required>
        </div>
        <div class="form-group">
            <label for="payment">Payment</label>
            <input type="text" id="payment" name="payment" value="<?php echo htmlspecialchars($order['payment']); ?>" required>
        </div>
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($order['Email']); ?>"> <!-- Hidden field for email -->

        <!-- Delete Button -->
        <button type="submit" name="delete" class="delete-btn" onclick="return confirm('Are you sure you want to delete this order?')">Delete Order</button>

        <!-- Back Button -->
        <button type="button" class="back-btn" onclick="window.location.href='orderupdate.php';">Go Back</button>
    </form>
</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
