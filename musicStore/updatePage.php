<?php 

session_start();
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
?>
<?php
//making sure user logged in in order to see the page. if they type on URL (after session expire) and try to get to this page will redirect her 
//back to logged in page for security
if (!isset($_SESSION["admin_id"])){
   redirect_to("login.php");
}

?>
<?php
 if(isset($_POST['update'])) {
	$new_id = $_POST['id'];
    $new_fName = $_POST['fName'];
    $new_lName = $_POST['lName'];
    $new_email = $_POST['email'];
    $new_userRoles = $_POST['userRoles'];
     
    //  Perform database query
	$query  = "UPDATE users SET ";
	$query .= "fName = '{$new_fName}', ";
	$query .= "lName = '{$new_lName}', ";
	$query .= "email= '{$new_email}', ";
    $query .= "userRoles = '{$new_userRoles}' ";
	$query .= "WHERE id = {$new_id}";

	$result = mysqli_query($connection, $query);

	if ($result && mysqli_affected_rows($connection) == 1 ) {
		// Success
		redirect_to("usersManage.php");
		
	} else {
		// Failure
		$message = "no change was made";
		die("Database query failed. " . mysqli_error($connection));
	} 
     
}elseif(isset($_POST['cancel'])) {
     
     redirect_to("usersManage.php");
 }

    
?>




