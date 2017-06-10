<?php session_start(); 
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
?>
<?php
	// v1: simple logout
	// session_start();
	$_SESSION["admin_id"] = null;
	$_SESSION["fName"] = null;
	redirect_to("musicStore.html");
?>

<?php
// second option more eraticated to detroy session
	// v2: destroy session
	// assumes nothing else in session to keep
	// session_start();
	// $_SESSION = array();
	// if (isset($_COOKIE[session_name()])) {
	//   setcookie(session_name(), '', time()-42000, '/');
	// }
	// session_destroy(); 
	// redirect_to("login.php");
?>
