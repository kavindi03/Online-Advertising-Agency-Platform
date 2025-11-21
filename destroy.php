<?php
session_start();

if ($_GET["sess"] == "des" && isset($_GET["sess"])) {

    session_destroy();

    header("location: ../home.php?status=Logged Out !");
    exit();
} else {
    header("location: ../home.php?status=Log Out Unsuccessfull !");
    exit();
}