<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <br><br><br><br><br><br>
    <title>Payment Details</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='payment/crud/pRead.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <script src="payment/crud/pRead.js"></script>
    <!-- for social media icons -->

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="payment/crud/images/white-logo.png" alt="Agency Logo"> 
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

    
    <!-- php part for reading the database table -->
    <?php
require 'pConfig.php';

$sql = "SELECT cNumber, cName, exdate, cvv, payment_status FROM payments";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<caption>Payment Records</caption>";
    echo "<tr>
            <th>Card Number</th>
            <th>Cardholder's Name</th>
            <th>Expiry Date</th>
            <th>CVV</th>
            <th>Payment Status</th>
            <th>Actions</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["cNumber"] . "</td>
                <td>" . $row["cName"] . "</td>
                <td>" . $row["exdate"] . "</td>
                <td>" . $row["cvv"] . "</td>
                <td>" . $row["payment_status"] . "</td>
                <td>
                    <a href='pUpdate.php?cNumber=" . $row["cNumber"] . "'><button class='updatebtn'>Edit</button></a>
                    <a href='pDelete.php?cNumber=" . $row["cNumber"] . "'><button class='deletebtn'>Delete</button></a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

$con->close();
?>
     
    
</body>
</html>