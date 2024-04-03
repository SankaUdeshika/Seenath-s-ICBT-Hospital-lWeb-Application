<?php
require "Connections/connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    $mobileLenth = strlen($mobile);

    if (empty($name)) {
        $_SESSION["InsertMessage"] = "Please Enter Your Name";
        header("Location: contactUs.php");
    } else if (empty($email)) {
        $_SESSION["InsertMessage"] =  "Please Enter Your Email";
        header("Location: contactUs.php");
    } else if (empty($mobile)) {
        $_SESSION["InsertMessage"] = "Please Enter Your mobile";
        header("Location: contactUs.php");
    } else if ($mobileLenth != 10) {
        $_SESSION["InsertMessage"] =  "Please Enter a Valid Mobile Number";
        header("Location: contactUs.php");
    } else {
        Database::iud("INSERT INTO `patient` (`Email`,`Name`,`Mobile`,`Address`) VALUES ('" . $email . "','" . $name . "','" . $mobile . "','" . $address . "') ");
        $_SESSION["InsertMessage"] = "Your Data Inserted in our Database. Thank You";
        header("Location: contactUs.php");
    }
}
