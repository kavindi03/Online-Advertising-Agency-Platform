<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AdminLogin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='home/adminLogin.css'>
    <script src='home/aloginprocess.js' defer></script>

</head>
<body>
        <div class="signUp-form-wrapper">
            <!-- Back to Home Button -->
            <a href="home.php" class="signUp-close"><i class="fa-solid fa-xmark"></i></a>
            
            <form method="post" action="aloginprocess.php">

                <h2>Admin Login</h2>

                <div class="input-group">
                    
                    <input name="adEmail" type="email" placeholder="Email" required>
                </div>

                <div class="input-group">
                    
                    <input name="adPassword" type="password" placeholder="Password" required>
                </div>
                <button name="submit" type="submit" class="btn">login</button>
                
            </form>
        </div>
</body>
</html>
