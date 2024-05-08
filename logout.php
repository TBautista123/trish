<?php
// Start the session
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: menu.php");
exit; // Ensure script termination after redirection
?>