<?php 
define('TITLE', 'Assets');
define('PAGE', 'assets');
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
       <p class="bg-primary text-white">Products/Parts Details</p>
                <?php
        $sql = "SELECT * FROM assets_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
                 {
         echo '<table class="table table-dark" >';
        echo '<thead>';
       echo '<tr>';
        echo '<th scope="col">Product ID</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">DOP</th>';
        echo '<th scope="col">Available</th>';
        echo '<th scope="col">Total</th>';
        echo '<th scope="col">Original Cost Each</th>';
        echo '<th scope="col">Selling Cost Each</th>';
        echo '<th scope="col">Action</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
                     while($row = $result->fetch_assoc()){
                    echo '<tr>';
          echo '<td class="bg-primary">'.$row["pid"].'</td>';
          echo '<td class="bg-secondary">'.$row["pname"].'</td>';
          echo '<td class="bg-success">'.$row["pdop"].'</td>';
          echo '<td class="bg-danger">'.$row["pava"].'</td>';
          echo '<td class="bg-info">'.$row["ptotal"].'</td>';
           echo '<td class="bg-warning">'.$row["poriginalcost"].'</td>';
            echo '<td class="bg-success">'.$row["psellingcost"].'</td>';
          echo '<td>';
          echo '<form action="editproduct.php" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["pid"].'><button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
          echo '</form>';
              echo '<form action="" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["pid"].'><button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>';
          echo '</form>';
          echo '<form action="sellproduct.php" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["pid"].'><button type="submit" class="btn btn-warning mr-3" name="issue" value="issue"><i class="fas fa-handshake"></i></button>';
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
	$sql = "DELETE FROM assets_tb WHERE pid = {$_REQUEST['id']}";
	if ($conn->query($sql) == TRUE) {
		
			echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    	}else
    	{
    	  echo "Unable to delete";	
    	}
}
?>         
    </div> <!--End Row-->

         <div class="float-right"><a href="addproduct.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
         
  </div> <!--END Container-->
<!-- Javascript-->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/all.min.js"></script>
  
</body>
</html>


