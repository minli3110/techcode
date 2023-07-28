<?php
    // Initialize the session
    session_start();

    // Clear all of the session variables
    $_SESSION = [];

    // Destroy the session
    session_destroy();

    // Ensure the session cookie is deleted
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }

    // Redirect to the login page or any other page you want
    header("Location: admin_login.html");
    exit;
?>
