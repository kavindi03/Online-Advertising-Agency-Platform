<?php

include 'contactConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        
        
        $sql = "INSERT INTO messages (full_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql); 
        
        
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

        
        if ($stmt->execute()) {
            
            header("Location:contactpage.php"); 

        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "All required fields must be filled out.";
    }
}


$con->close();
?>

