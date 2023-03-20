<?php 
define('TITLE', 'WorkOrder');
define('PAGE', 'work');
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
           <!-- START 2ND COL-->
  <div class="col-sm-9 col-md-10 mt-5">
  	<?php 

    $sql = "SELECT *FROM assignwork_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
    	echo '<table class="table table-dark col-sm-12 ">';
    	echo '<thead>';
    	echo '<tr>';
        echo '<th scope="col">Req ID </th>';
        echo '<th scope="col">Req Info </th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Address</th>';
        echo '<th scope="col">City</th>';
        echo '<th scope="col">Mobile</th>';
        echo '<th scope="col">Technician</th>';
        echo '<th scope="col">Assigned Date</th>';
        echo '<th scope="col">Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
           while ($row = $result->fetch_assoc())
           {
           	echo '<tr>';
           	echo '<td class="bg-primary">'.$row['request_id'].'</td>';
           	echo '<td class="bg-secondary">'.$row['request_info'].'</td>';
           	echo '<td class="bg-success">'.$row['requester_name'].'</td>';
           	echo '<td class="bg-primary">'.$row['requester_add2'].'</td>';
           	echo '<td class="bg-info">'.$row['requester_city'].'</td>';
           	echo '<td class="bg-warning">'.$row['requester_mobile'].'</td>';
           	echo '<td class="bg-secondary">'.$row['assign_tech'].'</td>';
           	echo '<td class="bg-danger">'.$row['assign_date'].'</td>';
           	echo '<td>';
                  echo '<form action="viewassignwork.php" method="POST" class="d-inline mr-2">';
                   echo '<input type="hidden" name="id" value='.$row['request_id'].'><button  class="btn btn-warning" name="view" value="view" type="submit"><i class="far fa-eye"></i></button>';
                  echo '</form>';
                     echo '<form action="" method="POST" class="d-inline">';
                   echo '<input type="hidden" name="id" value='.$row['request_id'].'><button  class="btn btn-secondary" name="delete" value="delete" type="submit"><i class="far fa-trash-alt"></i></button>';
                  echo '</form>';
           	echo '</td';
           	echo '</tr>';
           }
        echo '</tbody>';
    	echo '</table>'; 	
    }  else{
    	echo '0 Result';
    }
    if(isset($_REQUEST['delete']))
    {
    	$sql = "DELETE FROM assignwork_tb WHERE request_id = {$_REQUEST['id']} ";
    	if($conn->query($sql) ==TRUE)
    	{
    		echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
    	}else
    	{
    	  echo "Unable to delete data";	
    	}
    }
  	?>
  </div> 
  <!--End 2nd Col-->












<?php   

include('includes/footer.php');
?>