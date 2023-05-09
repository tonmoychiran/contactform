<?php
session_start();

// If the user is not logged in, redirect them to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: admin.html');
    exit;
}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Prevent caching of the previous page
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Redirect the user to the login page
header('Location: admin.html');
exit;
?>
