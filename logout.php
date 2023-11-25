<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect back to the login page or any other desired page
header("Location: log.php");
exit();
?>
