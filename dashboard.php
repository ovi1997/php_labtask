<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'partials/header.php';
include 'partials/sidebar.php';
include 'partials/footer.php';
