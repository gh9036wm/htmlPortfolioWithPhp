<?php
require 'includes/db_connection.php'; 
require_once 'includes/function.php';



$firstName = mysqli_real_escape_string($connection,$_POST['firstname']);
$lastName = mysqli_real_escape_string($connection,$_POST['lastname']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$hashed_pass = password_encrypt($password);


?>
<?php
	$query = "INSERT INTO users (";
    $query .=" fName, lName, email, hash";
    $query .=") VALUES ( ";
    $query .="'{$firstName}', '{$lastName}', '{$email}', '{$hashed_pass}'";
    $query .=")";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if ($result) {
        //sucess
      echo "<script>
alert('Sucessful, Click ok to continue ');
window.location.href='login.php';
</script>";
    }
    else{
        //failure
        //$message = "subject creation failed";
	die("Database query failed " . mysqli_error($connection));
	}
?> 






<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Registration Processing</title>
	</head>
	<body>
<pre>
<?php 


    ?>

</pre>
	</body>
</html>
<?php
mysqli_close($connection);
?>