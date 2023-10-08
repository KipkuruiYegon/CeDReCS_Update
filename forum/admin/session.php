<?php
// Start session only if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// If logged in, redirect to the dashboard page
if (isset($_SESSION["admin_usersid"]) && !empty($_SESSION["admin_usersid"])) {
    header("location: dashboard.php");
    exit;
}
?>
