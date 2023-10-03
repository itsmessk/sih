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
if(isset($_SESSION['userdata']) && strpos($link, 'login.php')){
	redirect('bod');
}
$module = array('','admin','staff','bod');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.php') || strpos($link, 'bod/')) && $_SESSION['userdata']['login_type'] !=  3){
	echo "<script>alert('Access Denied! Access Denied! This is not what you are looking for.');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
}
