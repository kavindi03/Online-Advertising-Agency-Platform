<?php

session_start();

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="icon" href="login/images/logo.png">

    <link rel="stylesheet" href="login/css/protfolio.css">
    <link rel="stylesheet" href="login/css/Header_Footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
        <script src="login/js/slider.js"></script>
        <script src="login/js/Header_Footer.js"></script>
</head>

<body>

    <!-- Header -->
    <nav class="navbar">
        <div class="logo">
        <img src="login/images/white-logo.png" alt="Agency Logo"> 
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

        <?php

        if (!isset($_SESSION['user'])) {
            ?>
            <a class="signup-btn" href="login.php">
                Login
            </a>
            <?php
        } else {
            ?>
            <a class="signup-btn" href="profile.php">
                Profile
            </a>
            <a class="signup-btn" href="login/./backend/destroy.php?sess=des">
                Logout
            </a>
            <?php
        }

        ?>
    </nav>

    <hr>

    <div class="title"><br><br>
        <h2>Our Previous Projects</h2>
    </div>

    <div class="pre-pro">
        <div class="slider-container">
            <button class="arrow arrow-left" onclick="slideLeft()">&#10094;</button>
            <div class="slider" id="slider">
                <div class="imgslider"><img src="login/images/Food-and-beverage-control-systems.jpg" alt="Image 1">
                    <h3>Food and Beverage</h3>
                    <p>In the competitive food 
                        and beverage industry, standing out is key.
                        Our agency creates targeted campaigns that showcase your
                        brands unique flavor through captivating visuals and storytelling.
                        Whether launching a new product or building loyalty, 
                        our data-driven strategies connect you with the right
                        audience for impactful results..</p>
                </div>

                <div class="imgslider"><img src="login/images/buy-2.jpg" alt="Image 1">
                    <h3>Product Launch </h3>
                    <p>Introducing our new line of organic,
                       farm-to-table meals. Packed with flavor
                       and made from the freshest ingredients, 
                       these dishes are perfect for those who crave healthy,
                       delicious options. Order now and get 10% off your first meal!.</p>
                </div>
                <div class="imgslider"><img src="login/images/buy-3.jpg" alt="Image 1">
                    <h3>Brand Awareness</h3>
                    <p>At [Brand Name], we bring gourmet experiences
                         to your doorstep.
                         From artisanal coffee to chef-prepared meals,
                         enjoy premium quality food and drink with
                         the convenience of online delivery. 
                         Taste the difference.</p>
                </div>
                <div class="imgslider"><img src="login/images/Bev20Pairing20-20tiny.jpg" alt="Image 1">
                    <h3>Event Promotion</h3>
                    <p> Don't miss our exclusive tasting 
                        event featuring new seasonal dishes
                         and signature cocktails. Limited spots available 
                          book your table today and indulge 
                          in a night of culinary creativity.</p>
                </div>
                <div class="imgslider"><img src="login/images/offers.jpg" alt="Image 1">
                    <h3>Special Offer</h3>
                    <p>Celebrate the launch of our new beverage
                       line! For a limited time, enjoy a free drink 
                       with every purchase of our handcrafted smoothies and juices.
                       Fresh, healthy, and delicious whats not to love?</p>
                </div>
            </div>
            <button class="arrow arrow-right" onclick="slideRight()">&#10095;</button>
        </div>
        <script>

        </script>
    </div>

    </div>
    <div class="header">
        <div class="small-container">
            <div class="row">
                <div class="col2">
                    <h1 style="color: aliceblue;">Create impactful Ads <br> That sell!
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci
                        neque harum fuga,<br> ratione quas architecto quae natus
                        comm</p>
                    <a href="" class="btn">Explore Now &#8594</a>
                </div>
                <div class="col2">
                    <img src="login/images/alo.jpg" alt="" style="border: none;border-radius: 50%;margin-left: 150px;">
                </div>
            </div>
        </div>

    </div>


    <div class="title" style="margin-top: 100px;">
        <h2>Our Acheivements</h2>

    </div>

    <div class="acheivements" style="background-color: #182254;">
        <div class="small-container1">
            <div class="row">
                <div class="col12">
                    <div class="imgslider1"><img src="login/images/awd1.jpg" alt="Image 1">
                        <h3>2023 Best Advertiser <br>Award</h3>
                        <p>We're honored to receive the 2023 
                           Best Advertiser Award, recognizing 
                           our innovative and impactful campaigns.
                           This award highlights our excellence in 
                           creative strategy and delivering results that
                           make our clients stand out in the digital landscape..</p>
                        <div class="btncn">
                            <a href="" class="btn">Read &#8594</a>

                        </div>
                        <hr>
                        <p style="background-color: #081f91; color: white;border: none;border-radius: 5px;">
                            whatever the date you want</p>

                    </div>

                </div>
                <div class="col12">
                    <div class="row12">
                        <div class="imgslider2">
                            <div class="col12"><img src="login/images/Content-Marketing-World-Awards-Ceremony-Ideas-min.png"
                                    alt="Image 1" style="margin-left: 5px;width: 90%;">
                            </div>
                            <div class="col12">
                                <h3>2023 Best Leading Company <br>Award
                                </h3>
                                <p>We're honored to be recognized 
                                   as the 2023 Best Leading Company,
                                   celebrating our innovation, leadership,
                                   and commitment to delivering exceptional
                                   results in the industry.</p>
                                <div class="btncn">
                                    <a href="" class="btn">Read
                                        &#8594</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row12">
                        <div class="imgslider2">
                            <div class="col12"><img src="login/images/Global-Air-Connection-IMAGE-1.jpg" alt="Image 1"
                                    class="imgg" style="margin-left: 5px;width: 90%;">
                            </div>
                            <div class="col12">
                                <h3>2023 Most Creative Adrvertisement<br>Award
                                </h3>
                                <p>We are proud to receive the 2023
                                  Most Creative Advertisement award,
                                  recognizing our innovative and compelling
                                  campaigns that captivate audiences
                                  and drive engagement.</p>
                                <div class="btncn">
                                    <a href="" class="btn">Read
                                        &#8594</a>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row12"></div>
                    <div class="imgslider2">
                        <div class="col12"><img src="login/images/GoldAwardfortheBestStateSectorAnnualReport1.jpg"
                                alt="Image 1" class="imgg" style="margin-left: 5px;width: 90%;"></div>
                        <div class="col12">
                            <h3>2023 Most Popular Adrvertisement <br>Award
                            </h3>
                            <p>We are thrilled to win the 2023
                               Most Popular Advertisement award,
                               recognizing our ability to create
                               widely resonant campaigns that engage 
                               audiences and build brand loyalty..</p>
                            <div class="btncn">
                                <a href="" class="btn">Read &#8594</a>

                            </div>

                        </div>


                    </div>
                </div>



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