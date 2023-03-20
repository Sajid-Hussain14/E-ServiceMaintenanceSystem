<?php 
define('TITLE', 'Add Requester');
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
if(isset($_REQUEST['reqsubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['u_name'] == "") || ($_REQUEST['u_email'] == "") || ($_REQUEST['u_password'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $uname = $_REQUEST['u_name'];
   $uEmail = $_REQUEST['u_email'];
   $uPassword = $_REQUEST['u_password'];
   $sql = "INSERT INTO userlogin_tb (u_name, u_email, u_password) VALUES ('$uname', '$uEmail', '$uPassword')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<!--Start 2nd col-->
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Requester/User</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="u_name">Name</label>
      <input type="text" class="form-control" id="u_name" name="u_name">
    </div>
    <div class="form-group">
      <label for="u_email">Email</label>
      <input type="email" class="form-control" id="u_email" name="u_email">
    </div>
    <div class="form-group">
      <label for="u_password">Password</label>
      <input type="password" class="form-control" id="u_password" name="u_password">
    </div>
    <div class="text-center ">
      <button type="submit" class="btn btn-primary mt-4 btn-block shadow-sm font-weight-bold" id="reqsubmit" name="reqsubmit">Submit</button>
      <a href="requester.php" class="btn btn-secondary mt-6 btn-block shadow-sm font-weight-bold">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>






<?php   
include('includes/footer.php');
?>