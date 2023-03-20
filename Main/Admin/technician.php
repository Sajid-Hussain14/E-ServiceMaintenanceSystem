<?php 
define('TITLE', 'Technician');
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
?>
<!--Start 2nd column-->
     <div class="col-sm-9 col-md-10 mt-5 text-center"> 
       <p class="bg-secondary text-white">List of Technicians</p>
                <?php
        $sql = "SELECT * FROM technician_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
                 {
         echo '<table class="table table-dark">';
        echo '<thead>';
       echo '<tr>';
        echo '<th scope="col">Emp ID</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Address</th>';
        echo '<th scope="col">Mobile</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Action</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
                     while($row = $result->fetch_assoc()){
                    echo '<tr>';
          echo '<td class="bg-primary">'.$row["empid"].'</td>';
          echo '<td class="bg-seconadry">'.$row["empName"].'</td>';
          echo '<td class="bg-success">'.$row["empAdd"].'</td>';
          echo '<td class="bg-danger">'.$row["empMobile"].'</td>';
          echo '<td class="bg-warning">'.$row["empEmail"].'</td>';
          echo '<td>';
          echo '<form action="editemp.php" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["empid"].'><button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
          echo '</form>';
              echo '<form action="" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["empid"].'><button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>';
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
	$sql = "DELETE FROM technician_tb WHERE empid = {$_REQUEST['id']}";
	if ($conn->query($sql) == TRUE) {
		
			echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    	}else
    	{
    	  echo "Unable to delete";	
    	}
}
?>         
    </div> <!--End Row-->

         <div class="float-right"><a href="insertemp.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
         
  </div> <!--END Container-->
<!-- Javascript-->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/all.min.js"></script>
  
</body>
</html>