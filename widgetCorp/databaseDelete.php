<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "password";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php 

//Often these form values in $_POST
    $id = 8;
   
	// 2. Perform database query
	$query = "DELETE FROM subjects ";
    $query .=" WHERE id = {$id} " ;
    $query .="LIMIT 1";//to make sure delete only 1
   
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if ($result && mysqli_affected_rows($connection) == 1 ) {
        //sucess
        echo "Sucess";
        // redirect to somepage.php
    }
    else{
        //failure
        //$message = "subject Delete failed";
	die("Database query failed " . mysqli_error($connection));
	}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		
		
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>