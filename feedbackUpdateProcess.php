<?php
require 'fconfig.php';

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Prepare a SQL statement to fetch the record
    $sql = "SELECT name, email, feedback FROM feedbacknew WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found!";
        exit();
    }
    $stmt->close();
} else {
    echo "No email is provided!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback/feedbackUpdateProcess.css">
    <title>Edit Feedback</title>
</head>
<body>
    

    <form action="feedbackUpdate.php" method="POST">

    <h2>Edit Feedback</h2><br>

    
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>

        <label for="feedback">Your Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required><?php echo $row['feedback']; ?></textarea>

        <button type="submit">Update Feedback</button>
    </form>
</body>
</html>
