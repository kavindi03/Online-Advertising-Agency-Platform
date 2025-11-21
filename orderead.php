<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>

        h1{
            text-align:center;
        }
        /* General table styles */
table {
    width: 100%; /* Full width of the container */
    border-collapse: collapse; /* Collapse borders */
    margin: 20px 0; /* Space above and below the table */
    font-family: Arial, sans-serif; /* Font family */
}

/* Table header styles */
th {
    background-color: #4CAF50; /* Green background for header */
    color: white; /* White text */
    padding: 12px; /* Padding for header cells */
    text-align: left; /* Left-aligned text */
}

/* Table cell styles */
td {
    border: 1px solid #ddd; /* Light gray border */
    padding: 10px; /* Padding for table cells */
}

/* Hover effect for table rows */
tr:hover {
    background-color: #f1f1f1; /* Light gray background on hover */
}

/* Alternate row colors for better readability */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Light gray for even rows */
}

/* Responsive design for smaller screens */
@media screen and (max-width: 600px) {
    table {
        font-size: 14px; /* Smaller font size on small screens */
    }
}

    </style>
</head>
<body>
    <h1>Order Details</h1>
    
</html>



<?php
require 'orderconfig.php';

// SQL query to select all data from the orderdetails table
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
            </tr>";

    // Fetch each row of the result and display it
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                
                <td>" . $row['Name'] . "</td>
                <td>" . $row['Address'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['Mobile'] . "</td>
                <td>" . number_format($row['payment'], 2) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No orders found.";
}

// Close the connection
mysqli_close($con);

?>