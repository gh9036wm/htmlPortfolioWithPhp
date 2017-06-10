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
            <h1>Admin page</h1>
            <h2>Welcome <?php echo htmlentities($_SESSION["fName"]); ?>.</h2>
            
            <h3>Main Menu</h3>
            
           <ul>
               <li><a href="usersManage.php">Manage Users</a></li>
               <li><a href="inventoryControl.php">Inventory Management</a></li>
            
          </ul>
            
     
           
   
    </div>
    
        
</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>