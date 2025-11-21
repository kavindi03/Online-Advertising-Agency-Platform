<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <!-- for social media icons -->
    <style>

        h1{
            text-align:center;
            
        }
        /* General table styles */
table {
    width: 80%; /* Full width of the container */
    border-collapse: collapse; /* Collapse borders */
    margin: 20px 0 0 150px; /* Space above and below the table */
    font-family: Arial, sans-serif; /* Font family */
}

/* Table header styles */
th {
    background-color: #4CAF50; /* Green background for header */
    color: white; /* White text */
    padding: 12px; /* Padding for header cells */
    text-align: center; /* Left-aligned text */
}

/* Table cell styles */
td {
    border: 1px solid #ddd; /* Light gray border */
    padding: 10px; /* Padding for table cells */
    text-align:center;
   
}

/* Alternate row colors for better readability */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Light gray for even rows */
}

tr:nth-child(odd) {
    background-color: rgb(152, 144, 144); /* Light gray for even rows */
}


/* Responsive design for smaller screens */
@media screen and (max-width: 600px) {
    table {
        font-size: 14px; /* Smaller font size on small screens */
    }
}        body {
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
    margin-top:100px;
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
    height: 500px;
}
/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.dashboard {
    margin: 0 auto;
}
body, html {
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
    background-color: #f0f0f0;
    transition: all 0.3s ease-in-out;
}

a {
    text-decoration: none;
    transition: color 0.3s ease-in-out;
    color:#ccc;
}

a:hover {
    color: #da325c;
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

.navbar .signup-btn {
    background: linear-gradient(145deg, #D5A3FF 0%, #77A5F8 100%); /* Gradient background for buttons */
    color: white;
    padding: 10px 25px;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
}

.navbar .signup-btn:hover {
    transform: scale(1.05);
    background: linear-gradient(145deg, #7d42b8, #d3a59f); /* Change background on hover */
}
  /* Background  */
  body {
    background-image: url('2.jpg'); /* Path to your image */
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

  
  /* Background image*/
  body {
    background-image: url('order/css/3.jpg'); /* Path to image */
    background-size: cover; /* Ensures the image covers the entire area */
    background-position: center; /* Centers the background image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
}

  
  /* Style for the Delete button */
.deletebtn {
    background-color: #ff4d4d; /* Red background */
    color: white; /* White text */
    border: none; /* Remove border */
    padding: 8px 12px; /* Add some padding */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
    font-size: 14px; /* Adjust font size */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

/* Hover effect */
.deletebtn:hover {
    background-color: #ff1a1a; /* Darker red on hover */
}

/* Style for the Edit button */
.updatebtn {
    background-color: #3adf63; /* Green background */
    color: white; /* White text */
    border: none; /* Remove border */
    padding: 8px 12px; /* Add some padding */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
    font-size: 14px; /* Adjust font size */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

/* Hover effect for the Edit button */
.updatebtn:hover {
    background-color: #1be24d; /* Darker green on hover */
}
  

    </style>
</head>
<body>
    <div class="dashboard">
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
        <a href="adminDash.php" class="signup-btn">Admin Dashboard</a>
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
        <br><br><br>
        <h1><b>Order details<b></h1>
        <br><br><br>
    
</body>
</html>

<?php
require 'order/orderconfig.php';

// Fetch all orders from the database
$sql = "SELECT Name, Address, Email, Mobile, payment FROM orderdetails";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
   
    echo "<table border='1'>
            <tr>
                
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Payment</th>
                <th>Action</th>
                
            </tr>";

    // Fetch each row and display it
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                
                <td>" . $row['Name'] . "</td>
                <td>" . $row['Address'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['Mobile'] . "</td>
                <td>" . number_format($row['payment'], 2) . "</td>
                <td>
                    <a href='orderedit.php?Email=" . $row['Email'] . "'><button class='updatebtn'>Edit</button></a>
                    <a href='orderdelete.php?Email=" . $row['Email'] . "'><button class='deletebtn'>Delete</button></a>
                </td>
                
              </tr>";
    }

    echo "</table>";
} else {
    echo "No orders found.";
}



echo"<br><br><br><br><br><br><br><br><br><br><br><br>";

// Close the connection
mysqli_close($con);
?>
