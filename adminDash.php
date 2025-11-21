<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br><br><br><br><br><br>
    <title>Admin Dashboard</title>
    <script src="order/js/adminDash.js"></script>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard {
    margin: 0 auto;
}

header {
    background: #FFC0CB;
    color: rgb(0, 0, 0);
    padding: 1rem;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-bar h1 {
    margin: 10px;
}

.admin {
    display: flex;
    align-items: center;
}

.avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-left: 10px;
}

canvas {
    width: 300px;
    height: 300px;
}

.manage-users, .messages, .manage-orders, .manage-feedbacks, .manage-payments {
  background: radial-gradient(
        circle,
        #8dcef1 0%,  /* Color stop #1 at 0% */
        #2675db 100% /* Color stop #2 at 100% */
      );
    margin: 20px;
    padding: 20px;
    width:800px ;
    border-radius: 20px;
}

.user-item, .message-item {
    padding: 0.5rem 0;
    border-bottom: 1px solid #ccc;
}

button.see-more, button.reply-btn, button.details-btn {
    background-color: #2edb48;
    color: white;
    border-radius: 10px;
    padding: 0.5rem;
    border: none;
    cursor: pointer;
    margin-top: 0.5rem;
}

/* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  font-family: 'Poppins', sans-serif;
  scroll-behavior: smooth;
  transition: all 0.3s ease-in-out;
}

a {
  text-decoration: none;
  transition: color 0.3s ease-in-out;
  color:#ccc;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 100;
    transition: background-color 0.3s ease;
}

.navbar a {
    color: white;
    margin-left: 20px;
    position: relative; /* Positioning for the pseudo-element */
    padding: 5px 0; /* Add padding for spacing */
}

.navbar .logo {
    display: flex;
    align-items: center; /* Align logo image and text vertically */
}

/* Adjusting logo size inside the navbar */
.navbar .logo img {
    height: 70px; /* Adjust the height to fit your design */
    width: auto;  /* Auto width to maintain aspect ratio */
    max-width: 150px; /* Optional: Set a max-width to control large logos */
    margin-right: 10px; /* Reduce the gap between logo and SAKURA text */
}

@media (max-width: 768px) {
    /* For smaller screens, reduce the logo size */
    .navbar .logo img {
        height: 40px;
    }
}

/* Underline effect */
.navibar a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px; /* Underline thickness */
    background-color: #77A5F8; /* Underline color */
    transform: scaleX(0); /* Start with the underline scaled down */
    transition: transform 0.3s ease-in-out; /* Smooth transition */
}

/* Show the underline on hover */
.navibar a:hover::after {
    transform: scaleX(1); /* Scale the underline to full width */
}

.navbar .cta-btn {
    background: linear-gradient(145deg, #D5A3FF 0%, #77A5F8 100%); /* Gradient background for buttons */
    color: white;
    padding: 10px 25px;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
}

.navbar .cta-btn:hover {
    transform: scale(1.05);
    background: linear-gradient(145deg, #7d42b8, #d3a59f); /* Change background on hover */
}

  /* Background  */
  body {
    background-image: url('bg.jpg'); /* Path to your image */
    background-size: cover; /* Ensures the image covers the entire area */
    background-position: center; /* Centers the background image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
}

  
  body::after {
    /* content: "";
    position: absolute;
    top: 0;
    left: 0; */
    width: 100%;
    height: 100%;
  }
  
  body {
    font-family: Arial, sans-serif;
  }
  
  /* General Styles */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  
 /* Footer Styling */
footer {
    background: linear-gradient(145deg, #D5A3FF, #77A5F8);
    text-align: center;
    padding: 20px 0;
    position: relative;
    width: 100%;
    bottom: 0;
    color: #fff; /* To make the text readable on the gradient */
}

footer p {
    margin: 10px 0;
    color: #333;
    font-size: 14px;
}

.social-media {
    margin-top: 10px;
}

.social-media a {
    margin: 0 10px;
    text-decoration: none;
    color: #333;
    font-size: 18px;
    transition: color 0.3s ease;
}

.social-media a:hover {
    color: #007bff; /* Change color on hover */
}

  
        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <!-- for social media icons -->
</head>
<body>
    <div class="dashboard">
         <!-- Header Section -->
    <!-- Navbar -->
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
        <a href="myAccountPage.php" class="cta-btn" id="signin-btn">My Profile</a>
    </nav>
        <!-- Top Section -->
        <header>
            <div class="top-bar">
                <h1>Admin dashboard</h1>
                <div class="admin">
                    <span>Admin</span>
                    <img src="order/css/admin.jpg" alt="Admin Avatar" class="avatar">
                </div>
            </div>
        </header>

         
        <!-- Manage orders Section -->
        <section class="manage-orders">
            <h2>Manage orders</h2>
            
            <p> monitor and manage all orders placed through the platform.</p><br>
            <button class="see-more" id="orderUpdateBtn">Click and view</button>
            
        </section>
        <script>
            document.getElementById("orderUpdateBtn").addEventListener("click", function() {
                window.location.href = "orderupdate.php";
            });
        </script>

        <!-- Manage Payments Section -->
        <section class="manage-payments">
            <h2>Manage Payments</h2>
            <p> tracks all financial transactions made by users.</p><br>
                
                <button class="see-more" id="pReadBtn">Click and view</button>
            
        </section>
        <script>
            document.getElementById("pReadBtn").addEventListener("click", function() {
                window.location.href = "pRead.php";
            });
        </script>
            
      

        <!-- Manage Feedbacks Section -->
        <section class="manage-feedbacks">
            <h2>Manage Feedbacks</h2>
            <p>review and respond to feedback from users, whether it’s related to products, services, or general platform experience. </p><br>
            
                <button class="see-more" id="feedbkbtn">Click and view</button>
            
            </section>
            <script>
                document.getElementById("feedbkbtn").addEventListener("click", function() {
                    window.location.href = "feedbackRead.php";
                });
            </script>
        
        <!-- Messages Section -->
        <section class="messages">
            <h2>Customer Support Handling Section</h2>
            <p>includes managing support tickets, responding to customer inquiries, resolving issues, and ensuring customer satisfaction. </p><br>
            <button class="see-more" id="msgUpdateBtn">Click and view</button>
            
            </section>
            <script>
                document.getElementById("msgUpdateBtn").addEventListener("click", function() {
                    window.location.href = "contactdisplaypage.php";
                });
            </script>
    

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

    
</body>
</html>
