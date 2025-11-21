<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="myAccountpage/myAccountPage.css">
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <a href="adminDash.php" class="cta-btn" id="signin-btn">Admin Dashboard</a>
      
    </nav>
    <!-- Account Information Section -->
    <div class="container">
        <div class="profile-header">
            <img src="myAccountpage/image/profile.jpg" alt="Profile Picture">
            <h2>My Profile</h2>
        </div>

        <div class="section">
            <h3>User Details</h3>
            <form>
                <input type="text" placeholder="User Name" required>
                <input type="text" placeholder="User ID" required>
                <input type="text" placeholder="Company Name/Brand Name">
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Phone Number" required>
                <textarea placeholder="Address"></textarea>
                <button type="submit">Edit Profile</button>
            </form>
        </div>

        <!-- Order Details Section -->
        <div class="section">
            <h3>Order Details</h3>
            <input type="text" placeholder="Order Status" disabled>
            <button onclick="toggleOrderDetails()">View Order Details</button>
            <div id="order-details">
                <p><strong>Order ID:</strong> 98765</p>
                <p><strong>Customer:</strong> Tom Keydon</p>
                <p><strong>Service:</strong> Google Ads Campaign</p>
                <p><strong>Price:</strong> Rs.50000.00</p>
                <p><strong>Status:</strong> Completed</p>
            </div>
        </div>

        <section class="my-activity">
            <h2>My Activity</h2>
            <p id="activity-content">Activity Status: <span id="activityStatus">Auto-filled after login</span></p>
        
            <!-- File upload input for My Activity section -->
            <label for="activityFile">Upload Document (Campaign Report, Ad Proposal):</label>
            <input type="file" id="activityFile" name="activityFile" accept=".pdf,.doc,.docx,.txt">
            
            <!-- Display selected file name after upload -->
            <p id="file-info">No file chosen yet.</p>
        </section>
        <!-- Additional Text Area for Comments -->
        <label for="additionalComments"></label>
        <textarea id="additionalComments" rows="4" cols="50" placeholder="Write your comments here..."></textarea>
        <p id="comments-info"></p>

        

        <div class="section">
            <h3>Privacy & Policy</h3>
            <p>
                At Top Adds, we are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard your information when you use our services.
                We may collect personal information such as your name, email address, and payment details when you register or interact with our platform.
                We use this information to enhance your experience, manage your account, and communicate with you about your campaigns.
                Your data is stored securely and will not be shared with third parties without your explicit consent, except where required by law.
                We employ various security measures to protect your information from unauthorized access, disclosure, or misuse. You have the right to access, modify, or delete your personal information at any time.
                By using our services, you consent to the terms outlined in this Privacy Policy. For any questions or concerns regarding our privacy practices, please contact us.
            </p>
        </div>
    </div>

    <!-- Footer Section -->
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

    <!-- JavaScript for Order Details Toggle -->
    <script src="myAccountpage/myAccountPage.js"></script>
</body>
</html>
