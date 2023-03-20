<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- BOOTSTRAP CSS-->
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- FONT AWESOME-->
	<link rel="stylesheet"  href="../css/all.min.css">
    <!-- CUSTOM CSS-->
	<link rel="stylesheet"  href="../css/style.css">
	<title><?php echo TITLE; ?></title>
</head>
<body>
         <!--Top NAVBAR-->
<nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="UserProfile.php" >E-Service Maintenance Portal</a></nav>


<!--Start Container-->
  <div class="container-fluid " style="margin-top: 40px;">
  	<!--Start row-->
  	<div class="row ">
  		<!--SIDE BAR ist column-->
  		<nav class="d-print-none col-sm-3 bg-info sidebar py-5">
  			<div class="sidebar-sticky  ">
  				<ul class="nav flex-column  ">
  					<li class="nav-item" ><a class="nav-link <?php if(PAGE == 'UserProfile'){echo 'active';} ?>" href="UserProfile.php"><i class="fas fa-user"></i>Profile</a></li>
  					<li class="nav-item"><a class="nav-link <?php if(PAGE == 'SubmitRequest'){echo 'active';} ?>" href="SubmitRequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
  					<li class="nav-item"><a class="nav-link <?php if(PAGE == 'CheckStatus'){echo 'active';} ?>"href="CheckStatus.php"><i class="fas fa-align center"></i>Service Status</a></li>
  					<li class="nav-item"><a class="nav-link <?php if(PAGE == 'ChangePassword'){echo 'active';} ?>" href="ChangePassword.php"><i class="fas fa-key"></i>Change Password</a></li>
  					<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li></ul>
  			</div>
  		</nav> <!--END SIDE BAR Ist column-->


      
  