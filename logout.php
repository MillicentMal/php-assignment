<?php
error_reporting(0);
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>

