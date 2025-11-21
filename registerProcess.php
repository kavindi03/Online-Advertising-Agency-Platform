<?php

// Include the database connection
require "db.php";

// Check if the form has been submitted by checking if the 'submit' button is clicked
if (isset($_POST["submit"])) {

    // Retrieve the input values from the form
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $rePwd = $_POST["confirm_password"];

    // Check if any of the required fields are empty
    if (
        empty($_POST["name"])
        || empty($_POST["mobile"])
        || empty($_POST["email"])
        || empty($_POST["password"])
        || empty($_POST["confirm_password"])
    ) {
        // Redirect to the login page with an error message if fields are missing
        header("location: ../login.php?status=Fill All Fields !");
        exit(); // Stop further script execution
    } else {
        
        // Query to check if the email is already in use
        $q1 = "SELECT * FROM `user` WHERE email='" . $email . "'";
        $rs1 = $conn->query($q1);
        $n1 = $rs1->num_rows; // Get number of rows returned

        // Query to check if the mobile number is already in use
        $q2 = "SELECT * FROM `user` WHERE mobile='" . $mobile . "'";
        $rs2 = $conn->query($q2);
        $n2 = $rs2->num_rows; // Get number of rows returned

        // If either email or mobile number already exists
        if ($n1 >= 1 || $n2 >= 1) {
            header("location: ../login.php?status=This Email or Mobile is Unavailable !");
            exit();
        }

        // Validate the name length (should be between 3 and 50 characters)
        if (strlen($name) < 3 || strlen($name) > 50) {
            header("location: ../login.php?status=Invalid Full Name !");
            exit();
        }
        // Validate the email format
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../login.php?status=Invalid Email !");
            exit();
        }
        // Validate password length (should be between 8 and 15 characters)
        elseif (strlen($pwd) < 8 || strlen($pwd) > 15) {
            header("location: ../login.php?status=Invalid Password !");
            exit();
        }
        // Check if the password and confirm password match
        elseif ($pwd != $rePwd) {
            header("location: ../login.php?status=Passwords Do Not Match !");
            exit();
        }
        // Validate mobile number format (should start with 07 and be exactly 10 digits)
        elseif (!preg_match("/07[0-8][0-9]{7}/", $mobile) || strlen($mobile) !== 10) {
            header("location: ../login.php?status=Invalid Mobile No !");
            exit();
        }
        // If all validations pass
        else {
            // Insert the new user data into the 'user' table
            $q1 = "INSERT INTO `user` (`name`,`mobile`,`email`,`password`) 
            VALUES ('" . $name . "','" . $mobile . "','" . $email . "','" . $pwd . "')";

            // Execute the query
            $rs1 = $conn->query($q1);
            
            // Close the database connection
            $conn->close();

            // Redirect to login page with a success message
            header("location: ../login.php?status=Successfully Registered !");
            exit();
        }
    }
} else {
    // If the form is not submitted, redirect to the home page
    header("location: ../index.php");
    exit();
}
