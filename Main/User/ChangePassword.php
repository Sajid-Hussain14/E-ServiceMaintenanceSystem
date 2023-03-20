<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='UserLogin.php'; </script>";
}
 $rEmail = $_SESSION['rEmail'];

if (isset($_REQUEST['passupdate'])) {
	if ($_REQUEST['rPassword'] == "") {
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill Required Fields</div>';
	}else{
			$rPass = $_REQUEST['rPassword'];
$sql = "UPDATE userlogin_tb SET u_password = '$rPass' WHERE u_email = '$rEmail'";
if($conn->query($sql) == TRUE)
{
	$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
} else
{
	$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update the Field</div>';
}

	}

}

?>
<div class="col-sm-9 col-md-9"> <!--Start CHNG pssword from 2nd col-->
	  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail ?>" readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
     <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>

    </div>

  </div>
</div>
</div>
</div>



<?php
include('includes/footer.php');
?>