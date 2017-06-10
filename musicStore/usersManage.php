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
	// 2. Perform database query
global $connection;

	$query  = "SELECT id, fName, lName, email, userRoles ";
	$query .= "FROM users ";
    $query .= "ORDER by fName ASC ";
    $result = mysqli_query($connection, $query);
   
    
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
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
            <li><a href="logout.php">Logout</a></li>
    
        
        </ul>
    
    </div>

		<div class="container main">
            <h1>User Managemanent</h1>
            <h2>Welcome <?php echo htmlentities($_SESSION["fName"]); ?>.</h2>
           <ul>
               <li><a href="adminPage.php">Back To Main Menu</a></li>
               <li><a href="#">Adding Users</a></li>
            </ul>
            <h1> Users List</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>UserRoles</th>
                    <th>Action</th>
                
                </tr>
            <?php while( $users = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['fName']; ?></td>
                    <td><?php echo $users['lName']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td><?php echo $users['userRoles']; ?></td>
                    <td><a href="editPage.php?id=<?php echo urlencode($users['id']); ?>">Edit</a></td>
                    <td><a href="deletePage.php?id=<?php echo urlencode($users['id']); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
                
                </tr>
                
                <?php }?>
                        
            </table>
      

          
   
    </div>
    
        
</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>