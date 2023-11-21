<?php 
if (session_status() == PHP_SESSION_NONE) {
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
	redirect('login');
}
if(isset($_SESSION['userdata']) && strpos($link, 'login.php') && $_SESSION['userdata']['login_type'] == 1){
	redirect('admin');
}
else if(isset($_SESSION['userdata']) && strpos($link, 'login.php') && $_SESSION['userdata']['login_type'] == 2){
	redirect('staff');
}
else if(isset($_SESSION['userdata']) && strpos($link, 'login.php') && $_SESSION['userdata']['login_type'] == 3){
	redirect('bod');
}
else if(isset($_SESSION['userdata']) && strpos($link, 'login.php') && $_SESSION['userdata']['login_type'] == 4){
	redirect('vendor');
}
/* $module = array('','admin','staff','bod');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.php') || strpos($link, '')) && $_SESSION['userdata']['login_type'] !=  1){
	echo "<script>alert('Access Denied!');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
} */
