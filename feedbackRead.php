<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Feedback Display</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='feedback/feedbackRead.css'>
   

</head>
<body>

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
        <a href="adminDash.php" class="cta-btn" id="signin-btn">Admin Dashboard</a>

    </nav>
    

<?php
require 'fconfig.php';

$sql = "SELECT name, email, feedback FROM feedbacknew";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<caption>Feedback Records</caption>";
    echo "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback Message</th>
            <th>Actions</th>
          </tr>";
   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["feedback"] . "</td>
                <td>
                    <a href='feedbackUpdateProcess.php?email=" . $row["email"] . "'><button class='updatebtn'>Edit</button></a>
                    <a href='feedbackDelete.php?email=" . $row["email"] . "'><button class='deletebtn'>Delete</button></a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No Results";
}

$con->close();
?>

    
</body>
</html>

