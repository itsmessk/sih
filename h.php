
<?php 
/* if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['userdata']) && !strpos($link, 'login.php')){
	redirect('login.php');
}
if(isset($_SESSION['userdata']) && strpos($link, 'login.php')){
	redirect('index.php');
}
$module = array('','admin','staff','bod');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.php') || strpos($link, 'admin')) && $_SESSION['userdata']['login_type'] !=  1){
	echo "<script>alert('Access Denied!');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
} */
?>
<?php
// Include the configuration file
require_once('config.php');

// Retrieve user data from the session
/* $username = $_SESSION['userdata']['login_type']; */
$type = $_SESSION['userdata']['type'];
$username = $_SESSION['userdata'];

foreach ($username as $key => $value) {
    echo "$key: $value<br>";
}



// Check if the user data exists before using it
if ($username !== null && $type !== null) {
    echo "Username: " . $username . "<br>";
    echo "User Type: " . $link . "<br>";
} else {
    echo "User data not found or incomplete.";
}
echo json_encode('array');