<?php
require "Connections/connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $email = $_POST["email"];

    if (empty($email)) {
        $_SESSION["SystemLoginMessage"] = "Please Enter Your Email";
        header("Location: system.php");
    } else if (empty($password)) {
        $_SESSION["SystemLoginMessage"] =  "Please Enter Your Password";
        header("Location: system.php");
    } else {

        $Admin_rs  =    Database::search("SELECT * FROM `admin` WHERE `adminEmail` = '" . $email . "' AND `password` = '" . $password . "'");
        $admin_num = $Admin_rs->num_rows;

        if ($admin_num > 0) {
            $_SESSION["SystemLoginMessage"] =  "";
            header("Location: system.php");
        } else {
            $_SESSION["SystemLoginMessage"] =  "Invalid Login Details. Please try again Later";
            header("Location: system.php");
        }
    }
}
