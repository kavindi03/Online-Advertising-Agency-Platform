<?php
include 'contactConnection.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "SELECT * FROM messages WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = $result->fetch_assoc();
    } else {
        echo "No message found with the provided ID.";
        exit;
    }

    $stmt->close();
} else {
    echo "Invalid request. Message ID is missing or invalid.";
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $messageContent = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($messageContent)) {
        
        $update_sql = "UPDATE messages SET full_name = ?, email = ?, phone = ?, subject = ?, message = ? WHERE id = ?";
        $stmt = $con->prepare($update_sql);
        $stmt->bind_param("sssssi", $name, $email, $phone, $subject, $messageContent, $id);

        if ($stmt->execute()) {
            echo "Message updated successfully!";
            
            header("Location: contactdisplaypage.php"); 
        } else {
            echo "Error updating message: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact Message</title>
    <link rel="stylesheet" href="contactus/contactstyle.css">
</head>

<body>
    
    <section class="contact">
        <h2>Update Contact Message</h2>

        
        <form action="contactupdate.php?id=<?php echo $id; ?>" method="POST">
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Full Name" id="name" name="name" class="item" value="<?php echo htmlspecialchars($message['full_name']); ?>" required>
                    <div class="error-txt">Full Name cannot be empty</div>
                </div>
                <div class="input-field field">
                    <input type="email" placeholder="Email Address" id="email" name="email" class="item" value="<?php echo htmlspecialchars($message['email']); ?>" required>
                    <div class="error-txt email">Email Address cannot be empty</div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Phone Number" name="phone" id="phone" class="item" value="<?php echo htmlspecialchars($message['phone']); ?>" required>
                    <div class="error-txt">Phone Number cannot be empty</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="subject" name="subject" class="item" value="<?php echo htmlspecialchars($message['subject']); ?>" required>
                    <div class="error-txt">Subject cannot be empty</div>
                </div>
            </div>

            <div class="textarea-field field">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" class="item" required><?php echo htmlspecialchars($message['message']); ?></textarea>
                <div class="error-txt">Message cannot be empty</div>
            </div>

            <button type="submit" name="submit" value="submit">Update Message</button>
        </form>


    </section>

    <!-- Footer Section 
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js"></script>-->
</body>

</html>
