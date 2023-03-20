
<?php
// The contact Us Form wont work with Local Host but it will work on Live Server
if(isset($_REQUEST['submit'])) {
 // Checking for Empty Fields
 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){
  // msg displayed if required field missing

  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  
 } else {
 $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];

 $mailTo = "sajuhhfkba@gmail.com";
 $headers = "From: ". $email;
 $txt = "You have received an email from ". $name. ".\n\n".$message;
 mail($mailTo, $subject, $txt, $headers);
 $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';

}
}
?>


	<div class="col-md-8"> <!-- Start ist Col-->
                    		<form action="" method="POST">
                    			<input type="text" class="form-control" name="name" placeholder="Enter Name"><br>
                    			<input type="text" class="form-control" name="Subject" placeholder="Enter Subject"><br>
                    			<input type="text" class="form-control" name="email" placeholder="Enter Email"><br>
                    			<textarea class="form-control" name="msg" placeholder="How can we help you?" style="height: 150px;"></textarea><br>
                    			<input type="submit" name="submit" class="btn btn-primary" value="send"><br>
                    		</form>
                    	</div> 