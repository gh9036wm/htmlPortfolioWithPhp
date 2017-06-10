<?php
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
session_start();

?>
<?php
//making sure user logged in in order to see the page. if they type on URL (after session expire) and try to get to this page will redirect her 
//back to logged in page for security
if (!isset($_SESSION["admin_id"])){
   redirect_to("login.php");
}

?>
<?php
     $id= $_GET['id'];
	$query ="DELETE FROM users WHERE id = {$id} LIMIT 1";
    $result = mysqli_query($connection, $query);
    
	// Test if there was a query error
	if ($result) {
        //sucess
        
        redirect_to ("usersManage.php");
    }
    else{
        //failure
        //$message = "subject creation failed";
	die("Database query failed " . mysqli_error($connection));
	}

/*if ($result && mysqli_affected_rows($connection) == 1) {
      echo " deletion is complete!!!";
		// Success
		//$_SESSION["message"] = "Subject deleted.";
		redirect_to("userManage.php");
	} else {
      echo "please recheck id again";
		// Failure
		//$_SESSION["message"] = "Subject deletion failed.";
		//redirect_to(".php?={$_GET["id"]}");
	}*/
?> 
<html>
<body>
    <?php //$id= $_GET['id'] ;
  //  echo $id;
    ?>
    
</body>
</html>