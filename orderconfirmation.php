<?php

require 'order/orderconfig.php';

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $payment = $_POST["payment"];

    // Validate the input (optional but recommended)
    if (empty($name) || empty($address) || empty($email) || empty($mobile) || empty($payment)) {
        die("Please fill all the required fields.");
    }

    // Prepare the SQL statement
    $stmt = $con->prepare("INSERT INTO orderdetails (Name, Address, Email, Mobile, payment) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $address, $email, $mobile, $payment);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        
    } else {
        echo "Failed to place order: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="order/css/orderconfirm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <!-- for social media icons -->
</head>
<body>
   
 <!-- Navbar -->
 <nav class="navbar">
        <div class="logo">
            <img src="FAQ/images/white-logo.png" alt="Agency Logo"> 
            <a href="index.php">SAKURA</a>
        </div> 
        <nav class="navibar">
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="Offers&Packagers.php">Offers & Packages</a>
            <a href="index.php">Portfolio</a>
            <a href="contactpage.php">Contact</a>
            <a href="aboutUsPage.php">About Us</a>
            <a href="faq.php">FAQs</a>
        </div>
        </nav>
        <a href="profile.php" class="signup-btn">My Profile</a>
    </nav>
<div class="container">
    <form id="confirm" method="post">
        <div class="form-group">
            <label for="packageType"><b>Package type</b></label>
            <select id="packageType" name="pkg" onchange="updateAmount()">
                <option value="Advertising Package">Advertising Package</option>
                <option value="Content Marketing Package">Content Marketing Package</option>
                <option value="GOLD Package">GOLD Package</option>
                <option value="Social Media Marketing Package">Social Media Marketing Package</option>

            </select>
        </div>
        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="address"><b>Address</b></label>
            <input type="text" id="address" name="address" placeholder="Enter your address">
        </div>
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="mobile"><b>Mobile</b></label>
            <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
    <label for="totalAmount"><b>payment</b></label>
    <input type="text" id="totalAmount" name="payment" placeholder="0.00" >
</div>

        <p>Attach documents that regarding your company and your requirements</p>
        <div class="form-group">
            <label for="documents">Upload documents</label>
            <input type="file" id="documents">
        </div>

            <div class="c">
                <h2>Terms and Conditions</h2>
                <p>Please read and accept our terms and conditions to proceed.<br><p>If the cancellation notice is received more than 14 days before the campaign start date, the advertiser is eligible for a full refund minus a 10% administrative fee.<br>
                    If the cancellation notice is received within 14 days of the campaign start date, the advertiser is eligible for a 50% refund.<br>
                    No refunds will be issued if the cancellation notice is received after the campaign has started.<br>If you need to cancel order please request it from our customer support service<br></p>
                <input type="checkbox" id="agree" name="agree">
                <label for="agree"> I agree to the terms and conditions</label><br><br>
                <button class="submit-btn" id="submitBtn" name="submit" disabled>Submit</button>
                <button type="button" class="pay-button" onclick="window.location.href='payment.php'">PAY</button>
            </div>
</form>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Advertising Agency. All Rights Reserved.</p>
        <div class="social-media">
            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </footer>
    
    <script src="order/js/orderconfirm.js"></script>
</body>
</html>