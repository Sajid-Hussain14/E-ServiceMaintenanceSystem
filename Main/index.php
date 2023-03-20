<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- BOOTSTRAP CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- FONT AWESOME-->
	<link rel="stylesheet"  href="css/all.min.css">

		<!--Google Font-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
		<!-- CUSTOM CSS-->
	<link rel="stylesheet"  href="css/style.css">
	<title>E-SMP</title>
</head>
<body style="background-color: black">
	                               <!--StART NAVIGATION-->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
		<a href="index.php" class="navbar-brand">E-SMP</a>
		<span class="navbar-text">Customer's Happiness is our Aim</span>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"> </span>
		</button>
		<div class="collapse navbar-collapse" id="myMenu">
			<ul class="navbar-nav pl-5 custom-nav">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
				<li class="nav-item"><a href="User/UserLogin.php" class="nav-link">Login</a></li>
				<li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</nav> <!-- END NAVIGATION-->
          <!--Start Header Jumbotron -->
<header class="jumbotron back-image" style="background-image: url(images/B2.jpeg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-primary font-weight-bold">Welcome to E-SMP</h1>
      <p class="font-italic font-weight-bold text-warning">Customer's Happiness is our Aim</p>
      <a href="User/UserLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>	
</header> <!--END Start Header Jumbotron -->

<!-- Start INtro -->
          <div class="container">
          	<div class="Jumbotron">
          		<h3 class="text-center">E-SMP Services</h3>
          		<p>
          			E-SMP Services is Kashmir's leading chain of multi-brand Electrical service workshop offering wide array of services.we focus on enhancing your uses experience by offering world-class Electronic Appliances maintenance Services.Our sole mission is "To provide Electronic Applainces care services to keep the devices fit and healthy and customers happy and smiling".

          			with well-equiped Electronic Applainces service centers and fully trained mechanics,we provide quality services with excellent packages that are designed to offer you great savings.
                    
                    Our state-of-art workshops are conveniently located in many cities across the Kashmir.Now you can book your services online by doing Registration.
          		</p>
          	</div>
          </div> <!--END INtro -->
       <!-- Start Services Section-->
       <div class="container text-center border-bottom text-primary" id="Services">
       	<h2>Our Services</h2>
       	<div class="row mt-4">
       		<div class="col-sm-4 mb-4">
       			<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
       			<h4 class="mt-2">Electronic Appliances</h4>
       		</div>
       		<div class="col-sm-4 mb-4">
       			<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
       			<h4 class="mt-2">Preventive Maintenance</h4>
       		</div>
       		<div class="col-sm-4 mb-4">
       			<a href="#"><i class="fas fa-cogs fa-8x text-danger"></i></a>
       			<h4 class="mt-2">Fault Repair</h4>
       		</div>
       	</div>
       </div> <!-- End Service Section-->
         <!-- Start registration Form-->
         <?php 
          include('UserRegistration.php');
         ?>
         <!-- END registration Form-->
       <!--Start Hppy Customer-->
          <div class="Jumbotron bg-primary">
	        <div class="container">
	        	<h2 class="text-center text-white">Happy Customers</h2>
	        	<div class="row mt-5">
	        		<div class="col-lg-3 col-sm-6"> <!--Start First col-->
	        			<div class="card shadow-lg mb-2">
	        				<div class="card-body text-center">
	        					<img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px; " align="avt1">
	        					<h4 class="card-title">Ubaid Ah</h4>
	        					<p class="card-text">ahsegfalwieugf a,kejfgflaiwuegf a,wekjfgaliuwegf a.kweufg;auwef a.keufga;wuef </p>
	        				</div>
	        			</div>
	        		</div>  <!--End First column-->
	        		<div class="col-lg-3 col-sm-6"> <!--Start Second col-->
	        			<div class="card shadow-lg mb-2">
	        				<div class="card-body text-center">
	        					<img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px; " align="avt2">
	        					<h4 class="card-title">Sakina Jan</h4>
	        					<p class="card-text">ahsegfalwieugf a,kejfgflaiwuegf a,wekjfgaliuwegf a.kweufg;auwef a.keufga;wuef </p>
	        				</div>
	        			</div>
	        		</div>  <!--End second column-->
	        		<div class="col-lg-3 col-sm-6"> <!--Start 3rd col-->
	        			<div class="card shadow-lg mb-2">
	        				<div class="card-body sstext-center">
	        					<img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px; " align="avt3">
	        					<h4 class="card-title">Akeel Ali</h4>
	        					<p class="card-text">ahsegfalwieugf a,kejfgflaiwuegf a,wekjfgaliuwegf a.kweufg;auwef a.keufga;wuef </p>
	        				</div>
	        			</div>
	        		</div>  <!--End 3rd column-->
	        		<div class="col-lg-3 col-sm-6"> <!--Start 4th col-->
	        			<div class="card shadow-lg mb-2">
	        				<div class="card-body text-center">
	        					<img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px; " align="avt4">
	        					<h4 class="card-title">Zehra Jan</h4>
	        					<p class="card-text">ahsegfalwieugf a,kejfgflaiwuegf a,wekjfgaliuwegf a.kweufg;auwef a.keufga;wuef </p>
	        				</div>
	        			</div>
	        		</div>  <!--End 4th column-->
	        	</div>
	        </div>
          </div> <!--End Happy Customer-->
                  <!--Contact Us-->
                  <div class="container" id="Contact">
                    <h2 class="text-center mb-4 text-primary font-weight-bold">Contact Us</h2>
                    <div class="row">
                    	 <!-- Start ist Col-->
                       <!--Include Statement for Contact us form-->
                        <?php 
                        include('ContactForm.php');
                        ?>
                    		<!-- End ist Col-->
                    	<div class="col-md-4 text-center text-danger font-weight-bold"><!--Start sencond col-->
                    		<strong>Headquarter</strong><br>E-SMP pvt Ltd,Karan Nagar Srinagar<br>
                    		phone +91 9384759376<br>
                    		<a href="#" target="_blank" >www.e-smp.com</a>
                    		<br><br>
                    		<strong>Branch</strong><br>E-SMP pvt Ltd,pulwama jk<br>
                    		phone +91 9384759376<br>
                    		<a href="#" target="_blank">www.e-smp.com</a>
                    	</div><!--End Second col-->
                    </div>
                  </div> <!--End Contact Us-->
                   <!--START FOOTER-->
                   <footer class="container-fluid bg-dark mt-5 text-white">
                   	<div class="container">
                   		<div class="row py-3">
                   			<div class="col-md-6"><!--START FIRST COL-->
                   				<span class="pr-2">Follow</span>
                   				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                   				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                   				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
                   				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                   				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
                   			</div><!--END FIRST COL-->
                   			<div class="col-md-6 text-right"> <!--Start 2nd col--><small>Desinged by SAJED HUSYN &copy; 2020</small>
                   				<small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                                                				
                   			</div> <!--END 2nd col-->
                   		</div>
                   	</div>
                   </footer>
                   <!--END FOOTER-->
          
	<!-- Javascript-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/all.min.js"></script>
</body>
</html>