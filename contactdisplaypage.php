<!DOCTYPE html>
<html>
<head>
    <br><br><br><br><br><br><br>
    <title>Display Pre Contact Us Details</title>
    <style>
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
  color: black;
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
       
body {
        font-family: Arial, sans-serif;
        background-color:pink;
        margin: 0;
        padding: 0;
    }
h2 {
        text-align: center;
     }
 table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:lightcoral;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .opt-links a {
            margin-right: 5px;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .opt-links a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <div class="logo">
        <img src="contactus/white-logo.png" alt="Agency Logo"> 
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
    <h2>Pre-added Questions</h2>
    <div style="text-align: right;margin-right: 20px;">
    <a href="adminDash.php" style="text-decoration: none;">
        <button type="button" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Back
        </button>
    </a>
</div>


    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Telephone Number</th>
            <th>Created_at</th>
            <th>Question</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include 'contactConnection.php';
        
        $sql = "SELECT id, full_name, email,phone,subject,message,created_at FROM messages";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["full_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td class='opt-links'><a href='contactupdate.php?id=" . $row["id"] . "'>Update</a><a href='contactdelete.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No questions found</td></tr>";
        }
        $con->close();
        ?>
    </table>
</body>
</html>
