<?php 
define('TITLE', 'Update Requester');
define('PAGE', 'requesters');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
  $aEmail = $_SESSION['aEmail'];
} else
{
  echo "<script> location.href='login.php'; </script>";
}
?>
             <!--START 2nd col-->
  <div class="col-sm-6 mt-5 mx-3 jumbotron">
  	<h3 class="text-center">Update Requester Details</h3>
  	<?php
    if(isset($_REQUEST['edit']))
    {
    	$sql = "SELECT * FROM userlogin_tb WHERE u_login_id = {$_REQUEST['id']}";
    	$result = $conn->query($sql);
    	$row = $result->fetch_assoc();	
    }
    if(isset($_REQUEST['requpdate']))
    	{
    		if(($_REQUEST['u_login_id'] == "") || ($_REQUEST['u_name'] == "") || ($_REQUEST['u_email'] == "") )
    		{
    			 $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All FIELDS</div>';
    		} else
    		{
    			$uid = $_REQUEST['u_login_id'];
    			$uname = $_REQUEST['u_name'];
    			$uemail = $_REQUEST['u_email'];
 $sql = "UPDATE userlogin_tb SET u_login_id = '$uid', u_name = '$uname', u_email = '$uemail' WHERE u_login_id = '$uid'";
    if ($conn->query($sql) == TRUE) {
    	 $msg = '<div class="alert alert-sucess col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
    } else
    {
    	 $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
    }
    		}
    	}
  	?>
         <form action="" method="POST">
         	<div class="form-group">
         		<label for="u_login_id">Requester ID</label>
         		<input type="text" class="form-control" name="u_login_id" id="u_login_id" value="<?php if(isset($row['u_login_id'])){
         			echo $row['u_login_id'];
         		} ?>" readonly>
         	</div>
         	<div class="form-group">
         		<label for="u_name">Name</label>
         		<input type="text" class="form-control" name="u_name" id="u_name" value="<?php if(isset($row['u_name'])){
         			echo $row['u_name'];
         		} ?>">
         	</div>
         	<div class="form-group">
         		<label for="u_email">Email</label>
         		<input type="email" class="form-control" name="u_email" id="u_email" value="<?php if(isset($row['u_email'])){
         			echo $row['u_email'];
         		} ?>">
         		</div>
         		<div class="text-center">
         			<button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
         			<a href="requester.php" class="btn btn-secondary">Close</a>
         		</div>
         	<?php 
              if (isset($msg)) {
              	echo $msg;
              }
         	?>
         </form>




  </div>
<?php   
include('includes/footer.php');
?>