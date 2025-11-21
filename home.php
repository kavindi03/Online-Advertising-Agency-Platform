<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online advertising Agency</title>
    <link rel="stylesheet" href="home/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="home/images/white-logo.png" alt="Agency Logo"> 
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
        <a href="#" class="cta-btn" id="signin-btn">Get Started</a>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h1>We Create Beautiful Digital Experiences</h1>
        <p>Let us help your business grow with our creative solutions.</p>
        <a href="index.php" class="cta-btn">Explore Our Services</a>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div>
            <h3>150+</h3>
            <p>Projects Completed</p>
        </div>
        <div>
            <h3>100+</h3>
            <p>Happy Clients</p>
        </div>
        <div>
            <h3>5+</h3>
            <p>Years in Business</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>We are a team of passionate designers, developers, and strategists dedicated to bringing your vision to life. At Digital Agency, we believe in the power of creativity, technology, and collaboration to drive business success.</p>
    </section>

    <!-- Our Process Section -->
    <section id="process" class="process">
        <h2>Our Process</h2>
        <div class="steps">
            <div class="step">
                <img src="home/images/discover.jpg" alt="Discover Image">
                <h3>1. Discover</h3>
                <p>We begin by understanding your brand, your goals, and your audience.</p>
            </div>
            <div class="step">
                <img src="home/images/design.jpg" alt="Design Image">
                <h3>2. Design</h3>
                <p>Our creative team designs a unique solution tailored to your needs.</p>
            </div>
            <div class="step">
                <img src="home/images/delivern.jpg" alt="Deliver Image">
                <h3>3. Deliver</h3>
                <p>We execute the plan and deliver an outstanding digital experience.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-container">
            <div class="service">
                <i class="fa fa-laptop"></i>
                <h3>Web Development</h3>
                <p>We build responsive, dynamic websites tailored to your business needs.</p>
            </div>
            <div class="service">
                <i class="fa fa-paint-brush"></i>
                <h3>Graphic Design</h3>
                <p>Stunning visuals that capture the essence of your brand and make it stand out.</p>
            </div>
            <div class="service">
                <i class="fa fa-chart-line"></i>
                <h3>Digital Marketing</h3>
                <p>Reach your target audience with our result-driven digital marketing strategies.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>Boost Your Brand... Reach Your Audience...</h2><br><br><br>
        <div class="testimonials-container">
            <div class="testimonial">
                <p>"Digital Agency helped us grow our brand online and reach new customers in ways we never imagined."</p>
                <h4>John Doe</h4>
            </div>
            <div class="testimonial">
                <p>"Their creativity and meticulous attention to detail are truly exceptional. We are absolutely thrilled with the new website they designed for us!"</p>
                <h4>Jane Smith</h4>
            </div>
        </div>
    </section>

     <!-- Sign-In Modal -->
     <div id="signinModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Choose Login</h2>
            <a href="login.php"><button>User</button></a>
            <a href="adminLogin.php"><button>Admin</button></a>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Online Advertising Agency. All Rights Reserved.</p>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>
    <script src="home/home.js"></script>
</body>
</html>
