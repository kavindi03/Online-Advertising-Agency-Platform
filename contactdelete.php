<?php
include 'contactConnection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

   
    $sql = "DELETE FROM messages WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
       
        header("Location: contactdisplaypage.php"); 
    } else {
        echo "Error deleting message: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$con->close();
?>
