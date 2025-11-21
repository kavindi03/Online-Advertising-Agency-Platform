<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP Advertising</title>
    <!-- for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="feedback/feedbackPage.css">
    <script src="feedback/feedbackPage.js"></script>
    <link rel="stylesheet" href="newHeader & Footer/Header & Footer/home.css">
</head>
<body>
<div>
    <!-- Header Section -->
    <nav class="navbar">
        <div class="logo">
            <img src="order/white-logo.png" alt="Agency Logo"> 
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
    

    <!-- Hero Section -->
    <div class="container">
        <div style="background-color: transparent; backdrop-filter: blur(12px);">
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome! <span class="highlight">TOP Advertising</span></h1>
                <h1><span class="highlight">Agency</span> site. We’d Love to Hear from You!</h1>
                
            </div>
        </section>
        <br><br><br>
        <!-- Feedback Form Section -->
        <div class="feedback-container">
            <h2>We Value Your Feedback</h2>
            <form action="feedbackInsert.php" method="POST" id="feedbackForm">

                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <label for="message">Your Feedback:</label>
                <textarea id="message" rows="4" name="feedback" placeholder="Tell us your experience..." required></textarea>

                <label for="rating">Rate Us:</label>
                <div class="star-rating" id="rating" name="rate">
                    <span class="star" data-value="1">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="5">&#9733;</span>
                </div>
                

                <button type="submit" class="btn">Submit Feedback</button>
            </form>
            <p id="thanksMessage"></p>
        </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Online Advertising Agency. All Rights Reserved.</p>
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
