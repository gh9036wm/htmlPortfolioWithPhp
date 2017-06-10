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
	global $connection;
		$id = $_GET['id'];
		$safe_admin_id = mysqli_real_escape_string($connection, $id);
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE id = {$safe_admin_id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result)===1){
   $users = mysqli_fetch_assoc($result);
    
}else{echo "id is not valid";}

?>
<!DOCTYPE html>
<html lang="en">
<?php require 'includes/header.html'; ?>

<body>
<div id="page" > <!-- Page content -->

		<header class="main_nav ">
		<a class="logo" href="#"><span>Store Logo</span></a>
           
		</header>
    <div class = "underNav">
       <ul>
            <li><a href="login.php">Login</a></li>
    
        
        </ul>
    
    </div>

		<div class="container main">
           
    <div >
      
          <h1>Edit Users</h1>
      
          
          <form action="register_process.php" method="post" autocomplete="off">
             <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>UserRoles</th>
                    
                
                </tr>
            
                <tr>
                    <td><input type="text" name="id" value="<?php echo htmlentities($users["id"]); ?>"/> </td>
                    <td><input type="text" name="fName" value="<?php echo htmlentities($users["fName"]); ?>"/> </td>
                    <td><input type="text" name="lName" value="<?php echo htmlentities($users["lName"]); ?>"/> </td>
                    <td><input type="text" name="email" value="<?php echo htmlentities($users["email"]); ?>"/> </td>
                    <td><input type="text" name="userRoles" value="<?php echo htmlentities($users["userRoles"]); ?>"/> </td>
                
                </tr>
                
             </table>  
              
          <button style="float: right;" class="button button-block" name="update" />Update</button>
              
         </form>
  
    </div>
    </div>
    
        
</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>