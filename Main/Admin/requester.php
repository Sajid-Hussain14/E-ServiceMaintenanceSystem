<?php 
define('TITLE', 'Requesters');
define('PAGE', 'requester');
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
     <!--Start 2nd column-->
     <div class="col-sm-9 col-md-10 mt-5 text-center"> 
       <p class="bg-secondary text-white">List of Users/Requesters</p>
                <?php
        $sql = "SELECT * FROM userlogin_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
                 {
         echo '<table class="table table-dark">';
        echo '<thead>';
       echo '<tr>';
        echo '<th scope="col">Requester ID</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Action</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
                     while($row = $result->fetch_assoc()){
                    echo '<tr>';
          echo '<td class="bg-secondary">'.$row["u_login_id"].'</td>';
          echo '<td class="bg-primary">'.$row["u_name"].'</td>';
          echo '<td class="bg-success">'.$row["u_email"].'</td>';
          echo '<td>';
          echo '<form action="editreq.php" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["u_login_id"].'><button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
          echo '</form>';
              echo '<form action="requester.php" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["u_login_id"].'><button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>';
          echo '</form>';
          echo '</td>';
          echo '</tr>';
                   }
                     echo '</tbody>
                   </table>';
                 } else
                 {
                 	echo '0 results';
                 }
                ?>
      </div>
<?php
if(isset($_REQUEST['delete']))
{
	$sql = "DELETE FROM userlogin_tb WHERE u_login_id = {$_REQUEST['id']}";
	if ($conn->query($sql) == TRUE) {
		
			echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    	}else
    	{
    	  echo "Unable to delete";	
    	}
}
?>         
    </div> <!--End Row-->

         <div class="float-right"><a href="insertreq.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
         
  </div> <!--END Container-->
<!-- Javascript-->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/all.min.js"></script>
  
</body>
</html>