<?php 

session_start();
require 'includes/db_connection.php'; 
require_once 'includes/function.php';
?>

<?php

//step2: Performing database query
$query= "SELECT * FROM products";
$result= mysqli_query($connection,$query);
// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Music Store </title>
  <meta name="description" content="PHP & SQL Project">
  <meta name="author" content="James Tran">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT( get from Google.com/fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
  
    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/musicStore/css/normalize.css">
  <link rel="stylesheet" href="/musicStore/css/skeleton.css">
  <link rel="stylesheet" href="/musicStore/css/musicStore.css">
  <link rel="stylesheet" href="/musicStore/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/musicStore/css/magnific-popup.css">
  
  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
<div id="page" > <!-- Page content -->

		<header class="main_nav ">
		<a class="logo" href="#"><span>Store Logo</span></a>
				

	
		</header>
    <div class = "underNav">
       <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Registration</a></li>
        
        </ul>
    
    </div>
    
    <div class="container main">
      
        <?php 
        //this is the way to get number of items display the same row instead of single from top to bottom 
        $i = 0;
        while( $rows= mysqli_fetch_assoc($result)){
        if ($i % 3 === 0)  { ?> <!-- if condition is true will show the div tag otherwise not -->                                       
        <div class="row"> 
            <?php } ?>
				<div class="four columns portfolio">
					<a class="image-link" href="uploaded/<?php echo $rows['image'];?>"><img src="uploaded/<?php echo $rows['image'];?>" /></a>
                    <h4><?php echo $rows['prodName'];?></h4>
                    <div class="imageCaption"><span>$<?php echo $rows['price'];?></span><span><a href="#">Add to Cart</a></span></div>
				</div>
				
		<?php $i++;		// 
			if ($i % 3 === 0){ ?> <!--increase 1 will change the remainder so the main div will not show till the remainder back to 0 again to get 3 images on a row-->
        </div>
	      <?php }} ?>
            
            
		
		</div><!--Container-->

		<div class="row green">
			<div class="container">
				<div class="four columns">
					<img class="avatar" src="images/myPic1.jpg" />
				</div>
				<div class="eight columns">
					<h2 class="bio">James Tran Music Corp</h2>
					<p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sun</p>
				</div>
			</div>
		</div><!--Row Green-->
    
                <nav>
										<ul>
											<li><a href="/index.html">Home</a></li>
                                            <li><a href="#">CD Products</a></li>
											<li><a href="#" aria-haspopup="true" >MP3 Produts</a></li>
											<li><a href="#" aria-haspopup="true">Video Products</a></li>
											<li><a href="#" aria-haspopup="true" >Accessory</a></li>
											
									
										</ul>
				</nav>
	
		<footer>
			<div class="container">
				<div class="row twelve columns">
					<ul class="social">
					<li class="facebook"><a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-lg"></i></a></li>
					<li class="twitter"><a href="https://twitter.com"><i class="fa fa-twitter-square fa-lg"></i></a></li>
					<li class="instagram"><a href="https://www.instagram.com"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li class="flickr"><a href="https://www.flickr.com"><i class="fa fa-flickr fa-lg"></i></a></li>
					<li class="youtube"><a href="https://www.youtube.com"><i class="fa fa-youtube-square fa-lg"></i></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
					</ul>
				</div>
				<div class="row twelve columns">
					<p class="copyright">&copy; 2016 James Tran. All Rights Reserved.</p>
				</div>
            </div>
		</footer>
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
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
  