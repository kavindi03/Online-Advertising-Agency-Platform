<?php

session_start();

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}

if (isset($_SESSION['user'])) {
    header("location: ./index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="login/images/white-logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="login/css/Header_Footer.css">

</head>

<body>

    <div style="display: flex; justify-content: center;">
        <button class="toggle-login" style="margin-right: 400px;">Login</button>
        <button class="signUpToggleLogin" style="margin-left: 400px;">SignUp</button>
    </div>

    <div class="wrapper">
        <div class="form-wrapper">
            <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
            <form method="post" action="backend/loginProcess.php">
                <h2>Login</h2>
                <div class="input-group">
                    <input name="email" type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input name="password" type="password" required>
                    <label for="">password</label>
                </div>
                <div class="remember">
                    <label><input name="remember-me" type="checkbox"> Remember me</label>
                </div>
                <button name="submit" type="submit" class="btn">login</button>
            </form>
        </div>
    </div>

    <div class="signUp-wrapper">
        <div class="signUp-form-wrapper">
            <a href="#" class="signUp-close"><i class="fa-solid fa-xmark"></i></a>
            <form method="post" action="backend/registerProcess.php">

                <h2>Sign up</h2>

                <div class="input-group">
                    <input name="name" type="text" required>
                    <label for="">Name</label>
                </div>

                <div class="input-group">
                    <input name="mobile" type="number" required>
                    <label for="">Mobile</label>
                </div>

                <div class="input-group">
                    <input name="email" type="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group">
                    <input name="password" type="password" required>
                    <label for="">Password</label>
                </div>

                <div class="input-group">
                    <input name="confirm_password" type="password" required>
                    <label for="">Confirm Password</label>
                </div>

                <div class="remember">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button name="submit" type="submit" class="btn">SignUp</button>
            </form>
        </div>
    </div>


    <script src="login/js/script.js"></script>
</body>

</html>