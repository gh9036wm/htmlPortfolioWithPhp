<?php 
session_start(); 
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
// set max file size
$max = 50 * 1024;// 50 kilobyte

$message = '';
if (isset($_POST['upload'])) {
  // echo '<pre>'; 
  // print_r($_FILES);
 //  echo '</pre>';
  //  from global temp location
$fileTemp = $_FILES['filename']['tmp_name'];
$imageName =  $_FILES['filename']['name'];
    //path to uploaded folder
$destination = __DIR__ . '/uploaded/'.$_FILES['filename']['name'];
$prodName = $_POST['prodName'];
$price = $_POST['price'];
$prodDesc = $_POST['prodDesc'];
	if ($_FILES['filename']['error'] == 0) {
		$result = move_uploaded_file($fileTemp, $destination);
		if ($result) {
			$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
    $query = "INSERT INTO products (";
    $query .=" image, prodName, price , prodDesc";
    $query .=") VALUES ( ";
    $query .="'{$imageName}','{$prodName}', {$price}, '{$prodDesc}' ";
    $query .=")";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if ($result) {
        //sucess
      
    }
    else{
        //failure
        //$message = "subject creation failed";
	die("Database query failed " . mysqli_error($connection));
	}    
            
            
            
            
            
		} else {
			$message = 'Sorry, there was a problem uploading ' .$_FILES['filename']['name'];
		}
	} else {
		switch ($_FILES['filename']['error']) {
			case 2:
				$message = $_FILES['filename']['name'] . ' is too big to upload.';
				break;
			case 4:
				$message = 'No file selected.';
				break;
			default:
				$message = 'Sorry, there was a problem uploading ' .$_FILES['filename']['name'];
				break;
		}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Uploads</title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Uploading Files</h1>
 <?php 
    
if ($message) {
    echo "<p>$message</p>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<p>
    <!-- to limit file size
<input type="hidden" name="MAX_FILE_SIZE" value=<?php echo $max; ?>-->
<label for="filename">Select File:</label>
<input type="file" name="filename" id="filename">
</p>
<label>Product Name</label><input type="text" name="prodName" />
<label>Enter Price</label>
 <input type = 'double' name='price' />
<p>
<label>Enter Description</label>
 <textarea type='text' name='prodDesc' cols= '40' rows="4" placeholder="info of this product"></textarea> 
</p>
<p>
<input type="submit" name="upload" value="Upload File">
</p>
</form>
</body>
</html>