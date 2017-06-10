

<?php
session_start();

require 'includes/db_connection.php'; 
require_once 'includes/function.php';
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
            <li><a href="register.php">Registration</a></li>
    
        
        </ul>
    
    </div>

		<div class="container main">
 
<?php
 if(isset($_POST['login'])) {

$email = $_POST['email'];
$password = mysqli_real_escape_string($connection,$_POST['password']);

     
    	global $connection;
		
		$safe_email = mysqli_real_escape_string($connection, $email);
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE email = '{$safe_email}' ";
		$query .= "LIMIT 1";
	$users_set = mysqli_query($connection, $query);
    $users =  mysqli_fetch_assoc($users_set); 
     
       
	if (mysqli_num_rows($users_set)===1 && password_verify($password, $users['hash'])){
        // echo "your email:".' '.$admin['email'].' '."and hash:".' '. $admin['hash'].' '. "is right";
         if ($users['userRoles']==='admin'){
             //Mark user as logged in
             $_SESSION["admin_id"] = $users['id'];
             
             $_SESSION["fName"] = $users['fName'];
             redirect_to("adminPage.php");
         }
        elseif ($users['userRoles']===''){
            $_SESSION["user_id"] = $users['id'];
            $_SESSION["fName"] = $users['fName'];
             redirect_to("userPage.php");
         }
             
             
    }else{
             
         echo "Please check your email or password";
         }
        

  
     
     
     
   }
        
?>
            
            
    <div class="form">
        
          <h1>Login</h1>
          
          <form action="login.php" method="post" autocomplete="off">
          
            <div class="otherRow">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" value="<?php echo htmlentities($email); ?>"/>
          </div>
          
          <div class="otherRow">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>  
        
</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>
</html>