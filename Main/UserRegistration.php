 <!-- Start registration Form-->
 <?php
 include('dbConnection.php');
 if(isset($_REQUEST['uSignup']))
 {
    //CHECKING FOR EMPTY FIELDS
    if (($_REQUEST['uName'] == "") || ( $_REQUEST['uEmail'] == "") || ($_REQUEST['uPassword'] == "") ) {
        $reg_msg = '<div class="alert alert-warning mt-2" role="alert">All fields are Required</div>'; }
    else {
       //EMAIL ALREADY REGSTRD
       $sql = "SELECT u_email FROM userlogin_tb WHERE u_email='".$_REQUEST['uEmail']."'";
       $result = $conn->query($sql);
       if ($result -> num_rows == 1){
           $reg_msg = '<div class="alert alert-danger mt-2" role="alert">Email Already Registered';}
       else {
        //ASSINGING USER'S VALUES TO VARIABLES
  $_uName = $_REQUEST['uName'];
  $_uEmail = $_REQUEST['uEmail'];
  $_uPassword = $_REQUEST['uPassword'];
   $sql = "INSERT INTO userlogin_tb(u_name, u_email, u_password) VALUES('$_uName','$_uEmail','$_uPassword')";
   if($conn->query($sql)== TRUE)
   {

    
    $reg_msg = '<div class="alert alert-success mt-2" role="alert">Account Created Sucessfully </div>';
   }
//IN CASE ANY ERRORR OCCURS AT IF() STATEMENT LIKE IF WE SET IT TO NULL THEN THIS WILLBE EXECUTED
   else{
    $reg_msg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
   }
}
}
}
 ?>
         <div class="container pt-5" id="registration">
         	<h2 class="text-center text-primary font-weight-bold">Create an Account</h2>
            <div class="row mt-4 mb-4">
            	<div class="col-md-6 offset-md-3 text-warning font-weight-bold">
            		<form action="" class="shadow-lg p-4" method="POST">
            			<div class="form-group">
            				<i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
            				<input type="text" class="form-control" placeholder="Enter Name" name="uName">
            			</div>
            			<div class="form-group">
            				<i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
            				<input type="email" class="form-control" placeholder="Enter Email" name="uEmail">
            				<small class="form-text">We'll never share your email with anyone else</small>
            			</div>
            			<div class="form-group">
            				<i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">New Password</label>
            				<input type="password" class="form-control" placeholder="Enter Password" name="uPassword">
            			</div>
            			<button type="submit" class="btn btn-primary mt-4 btn-block shadow-sm font-weight-bold" name="uSignup">Sign Up</button>
            			<em style="font-size: 15px;">Note-By clicking Sign Up,you agree to our terms,Data Policy and Cookie Policy</em>
                        <?php
                          if(isset($reg_msg))
                            {
                             echo $reg_msg;
                            }
                        ?>
            		</form>
            	</div>
            </div>
          </div> 
         <!-- END registration Form-->