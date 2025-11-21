<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online advertising Agency</title>
    <link rel="stylesheet" href="payment/crud/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <script src="payment/crud/payment.js" defer></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="payment/crud/images/white-logo.png" alt="Agency Logo"> 
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
        <a href="profile.php" class="cta-btn" id="signin-btn">My Profile</a>
    </nav>
<!-- Main content area -->
<div class="main-content">
    <div class="form-container">

        <!-- Order Display Form on the right -->
        <div class="order-display">
            <h1>Order Details</h1>
            <div class="detail-group">
                <label for="order-id">Order ID</label>
                <p id="order-id">ORD123456</p>
            </div>
            <div class="detail-group">
                <label for="user-id">User ID</label>
                <p id="user-id">USR789012</p>
            </div>
            <div class="detail-group">
                <label for="total-amount">Total Amount (Rs)</label>
                <p id="total-amount">Rs25000.00</p>
            </div>
        </div>
        
        <!-- Payment checkout form on the left -->
        <div class="checkout-container">
            <h1>Payment Method</h1><br>
            
                <br>
                <div class="payment-method">
                    <label><input type="radio" name="payment" value="card" checked> Card Payment</label>
                    <label><input type="radio" name="payment" value="bank"> Bank Deposit</label>
                </div>
                <form method="POST" action="pInsert.php" onsubmit="return confirmPayment()">
                <div id="card-payment" class="payment-section"><br>
                    <div class ="payment-details">
                        <h2>Accepted cards</h2>
                        <div class ="accepted-cards">
                            <img src="payment\crud/images/master1.JPG" alt="Master card">
                            <img src="payment\crud/images/visa.PNG" alt="Visa">
                        </div>
                    </div><br>
                    <h2>Card Information</h2>
                    <br>
                    <div class="input-group">
                        <label for="card-number">Card Number</label>
                        <input type="text" id="card-number" name="cdNumber" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
                    </div>
                    <div class="input-group">
                        <label for="card-holder">Card Holder's Name</label>
                        <input type="text" id="card-holder" name="cdName" placeholder="Full Name" required>
                    </div>
                    <div class="input-group">
                        <label for="expiry-mm-yy">Expiry Date</label>
                        <input type="text" id="Date" name="cdDate" placeholder="MM/YY" maxlength="5" pattern="\d{2}/\d{2}" required>
                    </div>
                    <div class="input-group">
                        <label for="cvv">CVV</label>
                        <input type="number" id="cvv" name="cdCvv" placeholder="xxx" maxlength="3" required>
                    </div>
                        <button type="submit" class="btn" >Pay Now</button>
                </div>
                </form>
                <form method="POST" action="pUpload.php">
                <div id="bank-transfer" class="payment-section hidden">
                    <br>
                    <h2>Bank Information</h2>
                    <br>
                    <h3 style="text-align:center;">Sakura Online Advertising Agency(Pvt Ltd)</h3>
                    <br><br>
                    <ul>
                        <li>Sampath Bank - 9999 9999 9999 9999</li><br>
                        <li>Commercial Bank - 3333 3333 3333 3333</li>
                    </ul>
                    <br>
                    <div class="input-group">
                        <label for="cash-owner">Full Name</label>
                        <input type="text" id="cash-owner" name="owner" placeholder="Your Name" required>
                    </div>
                    <div class="input-group">
                        <label for="payment-description">Remark</label>
                        <input type="text" id="payment-description" name="payment_description" placeholder="Payment Description" required>
                    </div>
                    <div class="input-group">
                        <label for="payment-slip">Payment Slip</label>
                        <input type="file" id="payment-slip" name="payment_slip" required> <!-- File input -->
                    </div>
                    <div>
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
        </form>
        </div>

    </div>
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
        </div>
    </footer>
    
</body>
</html>

