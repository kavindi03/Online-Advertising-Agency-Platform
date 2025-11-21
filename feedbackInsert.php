<?php
require 'fconfig.php';

$fname=$_POST["name"];
$femail=$_POST["email"];
$ffeedback=$_POST["feedback"];

$sql="INSERT INTO feedbacknew (name, email, feedback) VALUES ('$fname','$femail','$ffeedback')";


if($con->query($sql))
{
    header("Location: home.php"); // Redirect to homepage on success
    exit();
}
else{
    echo "Error".$con->error;
}
$con->close();

?>