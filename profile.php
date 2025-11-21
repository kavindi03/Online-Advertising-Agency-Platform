<?php

session_start();

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}

if (!isset($_SESSION['user'])) {
    header("location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="login/images/logo2.png">

    <link rel="stylesheet" href="login/css/profile.css">
    <link rel="stylesheet" href="login/css/Header_Footer.css">
    <script src="login/js/Header_Footer.js"></script>
</head>

<body>

     <!-- Navbar -->
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
            <a class="signup-btn" href="./backend/destroy.php?sess=des">
                Logout
            </a>
            <?php
        }

        ?>
    </nav>

    <main>
        <br><br><br><br><br><br>
        <section class="profile">
            <div class="profile-image">
                <img src="login/images/profile.png" alt="User Profile Image">
            </div>
            <div class="profile-details">
                <form method="post" action="profileUpdateProcess.php">
                    <p>Name: <input name="name" value="<?php echo $_SESSION['user']['name']; ?>" type="text"></p><br>
                    <p>Phone Number: <input name="mobile" value="<?php echo $_SESSION['user']['mobile']; ?>"
                            type="text"></p><br>
                    <p>Email: <input name="email" value="<?php echo $_SESSION['user']['email']; ?>" type="email"></p>
                    <br>
                    <p>Password: <input name="pwd" value="<?php echo $_SESSION['user']['password']; ?>" type="password">
                    </p><br>
                    <button name="update" type="submit" class="signup-btn">Save</button>
                    <button name="delete" style="margin-left: 10px;" class="delete-btn">Delete Profile</button>
                </form>
            </div>
        </section>
    </main>

</body>

</html>