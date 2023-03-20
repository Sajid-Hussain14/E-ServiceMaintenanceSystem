<?php
define('TITLE', 'User Profile');
define('PAGE', 'UserProfile');
include('includes/header.php');
include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='UserLogin.php'; </script>";
 }

 $sql = "SELECT u_name, u_email FROM userlogin_tb WHERE u_email='$rEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["u_name"]; }

 if(isset($_REQUEST['nameupdate']))
 {
  if($_REQUEST['rName'] == "")
  {
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">fill empty fields</div>';
  }else{
    $rName = $_REQUEST['rName'];
     $sql  = "UPDATE userlogin_tb SET u_name = '$rName' WHERE u_email = '$rEmail'";
     if ($conn -> query($sql) == TRUE) {
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
     }else
     {
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Enable To Update</div>';
     }
  }
 }

?>

  		<div class="col-sm-5 mt-5"> <!--Start Profile AREa 2nd Column-->
  			<form action="" method="POST" class="mx-5">
  				<div class="form-group">
  					<label for="rEmail">Email</label><input type="email" class="form-control" name="rEmail" id="rEmail" value=" <?php echo $rEmail ?>" readonly>
  				</div>
  				<div class="form-group">
  					<label for="rName">Name</label><input type="text" class="form-control" name="rName" id="rName" value=" <?php echo $rName  ?>">
  				</div>
  				<button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
          <?php 
             if(isset($passmsg)){echo  $passmsg;}
          ?>
  			</form>
  			
  		</div><!--END Profile AREa 2nd Column-->
  	
    <?php
include('includes/footer.php');
?>