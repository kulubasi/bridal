<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sparkles Salon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smart phone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/prettySticky.css" type="text/css">
<link rel="stylesheet" href="css/lightbox.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
</head>
<body oncontextmenu="return false;">
	<!-- banner -->
	<div  id="home" class="w3banner">
		<div class="">
			<!-- navigation -->
			<div class="top-nav">
				<nav>
					<div class="container">
						<div class="col-md-4 welcome-agileleft">
							<img src="images/logo1.png" alt=""/>
						</div>
						<div class="navbar-header logo">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- <h1><a href="index.html">Sparkles Salon</a></h1> -->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-right">
								<li><a href="index.html" class="link-kumya"><span data-letters="Home">Home</span></a></li>
								<li><a href="about.html" class="link-kumya"><span data-letters="About">About</span></a></li>	
								<!-- <li><a href="portfolio.html" class="link-kumya active"><span data-letters="Gallery">Gallery</span></a></li> -->

                                <li><a href="#" class="dropdown-toggle link-kumya" data-toggle="dropdown" role="button" aria-haspopup="true" 
									aria-expanded="false"><span data-letters="Our Gallery">Our Gallery</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="Men.php" class="link-kumya"><span data-letters="Gentlemen">Gentlemen</span></a></li>
										<li><a href="Hair.php" class="link-kumya"><span data-letters="Hairdressing">Hairdressing</span></a></li>
										<li><a href="Nails.php" class="link-kumya"><span data-letters="Nails">Nails</span></a></li>
										<li><a href="Kids.php" class="link-kumya"><span data-letters="Kidsl">Kids</span></a></li>
										<li><a href="Bridal.php" class="link-kumya"><span data-letters="Bridal">Bridal</span></a></li>
										
									</ul>
								<li><a href="#" class="dropdown-toggle link-kumya" data-toggle="dropdown" role="button" aria-haspopup="true" 
									aria-expanded="false"><span data-letters="Our Branches">Our Branches</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="gardencity.html" class="link-kumya"><span data-letters="Garden City">Garden City</span></a></li>
										<li><a href="lugogo.html" class="link-kumya"><span data-letters="Lugogo Mall">Lugogo Mall</span></a></li>
										<li><a href="oasis.html" class="link-kumya"><span data-letters="Oasis Mall">Oasis Mall</span></a></li>
										<li><a href="forest.html" class="link-kumya"><span data-letters="Forest Mall">Forest Mall</span></a></li>
										<li><a href="acacia.html" class="link-kumya"><span data-letters="Acacia Mall">Acacia Mall</span></a></li>
										<li><a href="village.html" class="link-kumya"><span data-letters="Bugolobi Village Mall">Bugolobi Village Mall</span></a></li>
									</ul>
								</li> 
								<li><a href="blog.html" class="link-kumya"><span data-letters="Blog">Blog</span></a></li>	
								
								<li><a href="contact.html" class="link-kumya"><span data-letters="Contact">Contact</span></a></li>
								<li><a href="Pricing.html" class="link-kumya"><span data-letters="Pricing">Pricing</span></a></li>	
							</ul>	
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
			</div>	
			<!-- //navigation -->
			<div class="banner-text w3-agile">
				<!-- <h2>Beauty at its Best</h2> -->
			</div>	
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery wthree">		
		<div class="container">
			<!-- <h3 class="wthree-title">Our Gallery</h3> -->
			<div class="gallery-agileinfo">
			 <?php
                include 'config.php';
                $selectQuery = "SELECT  * FROM nails";
                $result = mysqli_query($conn,$selectQuery);
                if(mysqli_num_rows($result) > 0){
                }
                else{
                    $msg = "No Record found";
                }
                    while($row = mysqli_fetch_assoc($result)){?>
                    <div class="col-md-4 port-grids view w3layouts-view">
                        <a class="agile-w3link" href="<?php echo $row['image']; ?>" data-lightbox="example-set" data-title="">
                            <img src="<?php echo $row['image']; ?>" class="img-responsive" alt=""/>
                        <div class="maskw3ls w3-agile">
                            <p><?php echo $row['descri']; ?></p>
                        </div>
                        <div class="clearfix"> </div>   
                    <script src="js/lightbox-plus-jquery.min.js"> </script>
                    </div>
                    <?php }?>
                  		
				
		
                  		
		</div>
	</div>	
	<!-- //gallery -->
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="col-md-5 ftr-wthree-grids">
				<h3>More With Us</h3>
				<a class="footer-img" href="single.html"> <img src="images/f2.jpg" alt=""/></a>
				<a  class="footer-img" href="single.html"> <img src="images/f1.jpg" alt=""/></a> 
				<a class="footer-img" href="single.html"> <img src="images/f3.jpg" alt=""/></a>
			</div> 
			<div class="col-md-3 ftr-wthree-grids">
				<h3>Call Us</h3>
				<p>Kampala, Uganda<br>
					<span><b>+256 783 657 493</b></span>
				</p>
				<div class="footer-bottom">
					<a href="#"><span>Facebook</span></a>
					<a href="#"><span>Pinterest</span></a>
					<a href="#"><span>LinkedIn </span></a>
					<a href="#"><span>Behance</span></a>
				</div>
			</div> 
			<div class="col-md-4 ftr-wthree-grids">
				<h3>Our Gallery Info</h3>
				<p>Take a quick look at our Gallery for your Trending hair styles and Hair cuts. You can get guidance on which style 
					best suits your preference. We keep you upto date with the best hair styles in town.</p>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2004 Sparklessalon. All rights reserved.</p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- script-for prettySticky -->
	<script src="js/prettySticky.js"></script>
	<!-- //script-for prettySticky -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>