<?php

// Include the database connection file
require "backend/db.php";

// Check if the update button is clicked
if (isset($_POST["update"])) {

    // Get the current user ID and other input data from the form
    $id = $_SESSION['user']['userId']; // User ID from the session
    $name = $_POST["name"]; // Name from the form
    $email = $_POST["email"]; // Email from the form
    $exEmail = $_SESSION['user']['email']; // Existing email stored in session
    $mobileNo = $_POST["mobile"]; // Mobile number from the form
    $pwd = $_POST["pwd"]; // Password from the form

    // Check if any required field is empty
    if (
        empty($_POST["name"])
        || empty($_POST["email"])
        || empty($_POST["pwd"])
        || empty($_POST["mobile"])
    ) {
        // Redirect to profile page with an error message
        header("location: ./profile.php?status=Empty Input !");
        exit();
    } else {
        // Check if the email has been changed
        if ($email != $exEmail) {

            // Check if the new email already exists in the database
            $q1 = "SELECT * FROM `user` WHERE email='" . $email . "'";
            $rs1 = $conn->query($q1);
            $n1 = $rs1->num_rows;

            // If email exists, show an error message and exit
            if ($n1 >= 1) {
                header("location: ./profile.php?status=This Email Unavailable !");
                exit();
            }
        }

        // Validate name length
        if (strlen($name) < 2 || strlen($name) > 20) {
            header("location: ./profile.php?status=Invalid Name !");
            exit();
        }
        // Validate email format
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ./profile.php?status=Invalid Email !");
            exit();
        }
        // Validate password length
        elseif (strlen($pwd) < 8 || strlen($pwd) > 45) {
            header("location: ./profile.php?status=Invalid Password !");
            exit();
        }
        // Validate mobile number format (must start with '07' and have exactly 10 digits)
        elseif (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/", $mobileNo) || strlen($mobileNo) !== 10) {
            header("location: ./profile.php?status=Invalid Mobile No !");
            exit();
        }
        else {
            // If all validations pass, update the user's details in the database
            $q1 = "UPDATE `user` SET name = '" . $name . "', email = '" . $email . "', password = '" . $pwd . "', mobile = '" . $mobileNo . "' WHERE userId = '" . $id . "'";
            $rs1 = $conn->query($q1);

            // Fetch the updated user data to refresh the session
            $q2 = "SELECT * FROM `user` WHERE `email`='" . $email . "' AND `password`='" . $pwd . "'";
            $rs2 = $conn->query($q2);
            $n2 = $rs2->num_rows;
            $d2 = $rs2->fetch_assoc();

            // Close the database connection
            $conn->close();

            // Reset the session data to reflect updated user info
            unset($_SESSION["user"]);
            $_SESSION["user"] = $d2;

            // Redirect to profile page with success message
            header("location: ./index.php?status=Updated Successfully !");
            exit();
        }
    }
} 
// Check if the delete button is clicked
elseif (isset($_POST["delete"])) {
    $Id = $_SESSION['user']['userId']; // Get user ID from session

    // Delete the user from the database
    $q5 = "DELETE FROM `user` WHERE userId='" . $Id . "'";
    $rs5 = $conn->query($q5);

    // Close the database connection
    $conn->close();

    // Clear the session and destroy it
    unset($_SESSION["user"]);
    session_destroy();

    // Redirect to the home page with account deletion success message
    header("location: ./home.php?status=Account Deleted Successfully !");
    exit();
} 
// If no form is submitted, redirect to the homepage
else {
    header("location: ./home.php");
    exit();
}
