<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers & Packages</title>
    <link rel="stylesheet" href="order/css/Offers&Packages.css">
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
    <div class="des">
    <h1>   These are our exclusive packages</h1>
    <h3>All the packages are designed to give you the maximum benefits with the minimum cost.</h3>
    </div>
</section>
    <section class="packages">
        <div class="package" id="free">
            <h2>Advertising Package</h2>
            <h3>RS 15,000 Only</h3>
            <ul>
                <li>Campaign Setup and Management</li>
                <li>Keyword Research</li>
                <li>Ad Creation</li>
                <li>Performance Tracking and Reporting</li>
            </ul>
            <button onclick="showDescription('free')">Let's get started</button>
            <p class="description"> Benefits:<br> Generates immediate traffic, targets specific audiences, and provides measurable results.
                </p>

            <br><br>
            <button onclick="window.location.href='orderconfirmation.php'">BUY NOW</button>
            <button onclick="window.location.href='cart.php'">Add to cart</button>
        </div>
        <div class="package" id="basic">
            <h2>Content Marketing Package</h2>
            <h3>RS 25,000 Only</h3>
            <ul>
                <li>Content Strategy Development</li>
                <li>Blog and article Writing</li>
                <li>Content Distribution</li>
                <li>Performance Analysis</li>
            </ul>
            <button onclick="showDescription('basic')">Let's get started</button>
            <p class="description">Benefits:<br> Attracts and retains a clearly defined audience, improves brand authority,
                 and drives profitable customer actions</p>

            <br><br>
            <button onclick="window.location.href='orderconfirmation.php'">BUY NOW</button>
            <button onclick="window.location.href='cart.php'">Add to cart</button>
        </div>
        
        <div class="package" id="gold">
            <h2>GOLD Package</h2>
            <h3>RS 45,000 Only</h3>
            <h3>Includes <br> all the services of Content Marketing Package ,Email Marketing Package,Advertising Package and Social Media Marketing Package </h3><br>
            <button onclick="showDescription('gold')">Let's get started</button>
            <p class="description">Benefits:<br>
                Generates immediate traffic, targets specific audiences, and provides measurable results.
                <br>Attracts and retains a clearly defined audience, improves brand authority,
                and drives profitable customer actions.
                <br>Enhances customer engagement, nurtures leads, and drives conversions through targeted email campaigns.
            </p>
            <br><br>
            <button onclick="window.location.href='orderconfirmation.php'">BUY NOW</button>
            <button onclick="window.location.href='cart.php'">Add to cart</button>
        </div>
        
        
    </section>
    <section class="special-offer" id="special-offer">
        <h2>Special Offer</h2>
        <h1>Social Media Marketing Package</h1>
        <h1>Monthly RS.10,000 Only</h1><br>
        <button onclick="showDescription('special-offer')">Let's get started</button>
            <p class="description">Services Included:<br>
                                   Social Media Strategy<br>
                                   Content Creation (including videos)<br>
                                   Social Media Monitoring<br>
                                   Competitor Analysis<br>
                                   Paid Ads (Facebook, Instagram, etc.)</p>
            <br><br>
            <button onclick="window.location.href='orderconfirmation.php'">BUY NOW</button>
            <button onclick="window.location.href='cart.php'">Add to cart</button>
    </section>

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
    <script src="order/js/Offers&Packages.js"></script>
</body>
</html>
