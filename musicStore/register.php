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
            <li><a href="userLogin.html">Login</a></li>
    
        
        </ul>
    
    </div>

		<div class="container main">
    <div class="form">
        
          <h1>Registration</h1>
          
          <form action="register_process.php" method="post" autocomplete="off">
          
          <div class="top-row">
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
        
      
      

            
            
            
            
		
		</div><!-- End Container-->
<?php require 'includes/footer.html'; ?>
    
</div> <!-- end of page content -->
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <script src="scripts/jquery.magnific-popup.js"></script>
  <script type="text/javascript">
	 $('.image-link').magnificPopup({ 
  type: 'image',
  mainClass: 'mfp-with-zoom', // this class is for CSS animation below

  zoom: {
    enabled: true, // By default it's false, so don't forget to enable it

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function 

    // The "opener" function should return the element from which popup will be zoomed in
    // and to which popup will be scaled down
    // By defailt it looks for an image tag:
    opener: function(openerElement) {
      // openerElement is the element on which popup was initialized, in this case its <a> tag
      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }

});	</script>
</body>
</html>