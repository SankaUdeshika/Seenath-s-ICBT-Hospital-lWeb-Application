<?php
require "Connections/connection.php";
session_start();

if (isset($_GET["email"])) {
    $email = $_GET["email"];
    echo ($email);
    Database::iud("UPDATE `patient` SET `Status` = 'DONE' WHERE `Email` = '" . $email . "' ");
    header("Location: SystemDashboard.php");
} else {
    echo ("NO");
}
