<?php
require 'includes/db_connection.php'; 
require_once 'includes/function.php';



$firstName = mysqli_real_escape_string($connection,$_POST['firstname']);
$lastName = mysqli_real_escape_string($connection,$_POST['lastname']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$hashed_pass = password_encrypt($password);

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
echo $firstName .' '. $lastName.' '.$email.' '. $password.' '. $hashed_pass;

    ?>

</pre>
	</body>
</html>
<?php
mysqli_close($connection);
?>