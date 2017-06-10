<?php 
session_start();
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
?>
<?php
//making sure user logged in in order to see the page. if they type on URL (after session expire) and try to get to this page will redirect her 
//back to logged in page for security
if (!isset($_SESSION["user_id"])){
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
            <h3>Welcome <?php echo htmlentities($_SESSION["fName"]); ?> </h3>
           
   
    </div>
    
        
</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>