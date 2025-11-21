<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Cancellation</title>
    <link rel="stylesheet" href="css/ordercancel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <!-- for social media icons -->
</head>
<body>
    <!-- Header -->
    <nav class="navbar">
        <div class="logo">
            <img src="css/logo.png" alt="Logo"> 
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Offers & Packages</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        <a href="signup.html" class="signup-btn">User</a>
    </nav>

    <main>
        <section class="order-cancellation">
            <h2>Order Cancellation</h2><br>
            <form action="cancel_order.php" method="POST">
                <label>Order Number</label>
                <input type="text" name="order_number" value="xxxxxxxxxx" readonly>

                <label>Name</label>
                <input type="text" name="name" value="xxxxxx xxxxxxxxxx" readonly>

                <label>Address</label>
                <input type="text" name="address" value="xxxxxxxxxxxxxxxxxxxxxxxxxx" readonly>

                <label>Mobile</label>
                <input type="text" name="mobile" value="xxxxxxxxxx" readonly>

                <label>Email</label>
                <input type="email" name="email" value="xxxxxxx@gmail.com" readonly>

                <label>Cancellation Reason</label>
                <select name="reason" required>
                    <option value="Change of Mind">Change of Mind</option>
                    <option value="Incorrect Order">Incorrect Order</option>
                    <option value="Product Issue">Product Issue</option>
                    <option value="Other">Other</option>
                </select>

                <textarea name="other_reason" placeholder="If other, please describe"></textarea>

                <button type="submit">Submit</button>
            </form>

           
        </section>

    </main>

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

        <script src="js/ordercancel.js"></script>
</body>
</html>
