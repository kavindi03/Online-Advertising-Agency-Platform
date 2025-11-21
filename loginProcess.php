<?php

// Include the database connection
require "db.php";

// Check if the form is submitted by checking if the 'submit' button is clicked
if (isset($_POST["submit"])) {
    
    // Get the input values from the form
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    // Check if either the email or password fields are empty
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        // Redirect the user back to the login page with an error message
        header("location: ../login.php?status=Fill All Fields !");
        exit(); // Stop further script execution
    } else {

        // Create SQL query to check if a user exists with the provided email and password
        $q1 = "SELECT * FROM `user` WHERE `email`='" . $email . "' AND `password`='" . $pwd . "'";
        
        // Execute the query and store the result
        $rs1 = $conn->query($q1);
        
        // Get the number of rows returned from the query
        $n1 = $rs1->num_rows;
        
        // Fetch the data of the matched user (if any)
        $d1 = $rs1->fetch_assoc();

        // Close the database connection
        $conn->close();

        // If a user is found (n1 >= 1 means one or more matches were found)
        if ($n1 >= 1) {

            // Check if the user session is already set (user is already logged in)
            if (isset($_SESSION["user"])) {
                // If so, redirect to the homepage
                header("location: ../index.php");
                exit();
            } else {
                // Otherwise, set the session variable to the user data and redirect to homepage
                $_SESSION["user"] = $d1;
                header("location: ../index.php");
                exit();
            }

        } else {
            // If no user is found with the provided credentials, redirect back with an error message
            header("location: ../login.php?status=Invalid Email or Password !");
            exit();
        }
    }
} else {
    // If the submit button was not clicked, redirect to the login page
    header("location: ../login.php");
    exit();
}
