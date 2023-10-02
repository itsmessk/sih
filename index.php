<?php
require_once('config.php'); // Include your config.php file
 // Start the session

// Check if the user is not logged in (assuming 'login_type' is set to 1 for logged-in users)
if (!isset($_SESSION['userdata']['login_type']) || $_SESSION['userdata']['login_type'] != 1 || $_SESSION['userdata']['login_type'] != 2 || $_SESSION['userdata']['login_type'] != 3) {
    redirect('login');
    exit; // Make sure to exit after the redirection
}

// Get the user type from the session data
$type = isset($_SESSION['userdata']['type']) ? intval($_SESSION['userdata']['type']) : null;

// Use a switch statement for better readability
switch ($type) {
    case 1:
        redirect('admin'); // Redirect to the 'admin' directory or page
        break;
    case 2:
        redirect('staff'); // Redirect to the 'staff' directory or page
        break;
    case 3:
        redirect('bod'); // Redirect to the 'bod' directory or page
        break;
    default:
        echo 'User type not available';
}
?>
