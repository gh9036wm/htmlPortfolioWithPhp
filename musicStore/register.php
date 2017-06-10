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
           
    <div class="form">
      
          <h1>Registration</h1>
          
          <form action="register_process.php" method="post" autocomplete="off">
          
          <div class="otheRow">
            <div class="sameRow">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="sameRow">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>
              

          <div class="otherRow">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="otherRow">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          <div class="otherRow">
          <button type="submit" class="button " name="register" value="Submit" />Register</button>
              </div>
        
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