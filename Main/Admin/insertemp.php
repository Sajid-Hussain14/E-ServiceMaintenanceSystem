<?php 
define('TITLE', 'Add Technician');
define('PAGE', 'technician');
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
if(isset($_REQUEST['empsubmit'])){
 // Checking for Empty Fields
 if(($_REQUEST['e_name'] == "") || ($_REQUEST['e_add'] == "") || ($_REQUEST['e_mobile'] == "") || ($_REQUEST['e_email'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $eName = $_REQUEST['e_name'];
   $eAdd = $_REQUEST['e_add'];
   $eMobile = $_REQUEST['e_mobile'];
   $eEmail = $_REQUEST['e_email'];
   
   $sql = "INSERT INTO technician_tb (empName, empAdd, empMobile, empEmail) VALUES ('$eName','$eAdd', '$eMobile','$eEmail')";
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
  <h3 class="text-center">Add New Technician</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="e_name">Name</label>
      <input type="text" class="form-control" id="e_name" name="e_name">
    </div>
    <div class="form-group">
      <label for="e_add">Address</label>
      <input type="text" class="form-control" id="e_add" name="e_add">
    </div>
      <div class="form-group">
      <label for="e_mobile">Mobile</label>
      <input type="text" class="form-control" id="e_mobile" name="e_mobile" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="e_email">Email</label>
      <input type="email" class="form-control" id="e_email" name="e_email">
    </div>
    <div class="text-center ">
      <button type="submit" class="btn btn-primary mt-4 btn-block shadow-sm font-weight-bold" id="empsubmit" name="empsubmit">Submit</button>
      <a href="requester.php" class="btn btn-secondary mt-6 btn-block shadow-sm font-weight-bold">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
  <script type="text/javascript">
          function isInputNumber(evt){
            var ch = String.fromCharCode(evt.which);
            if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
            }
          }
        </script>
<?php   
include('includes/footer.php');
?>