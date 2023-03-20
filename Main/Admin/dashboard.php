<?php 
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
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
$sql = "SELECT max(request_id) FROM submitrequest_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitrequest = $row[0];

 $sql = "SELECT max(request_id) FROM assignwork_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $assignwork = $row[0];

 $sql = "SELECT * FROM technician_tb";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;


?>
                      <div class="col-sm-9 col-md-10"> <!--Start Dashboard 2nd column-->
                      <div class="row text-center mx-5">
                        <div class="col-sm-4 mt-5">
                          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Requests Recieved
                            </div>
                            <div class="card-body">
                              <h4 class="card-title"><?php echo $submitrequest; ?></h4>
                              <a class="btn text-white" href="request.php">View</a>
                               </div>
                          </div>
                        </div>
                         <div class="col-sm-4 mt-5">
                          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Assigned Work
                            </div>
                            <div class="card-body">
                              <h4 class="card-title"> <?php echo $assignwork; ?></h4>
                              <a class="btn text-white" href="work.php">View</a>
                               </div>
                          </div>
                        </div>
                         <div class="col-sm-4 mt-5">
                          <div class="card text-white bg-primary  mb-3" style="max-width: 18rem;">
                            <div class="card-header">No. of Technician
                            </div>
                            <div class="card-body">
                              <h4 class="card-title"> <?php echo $totaltech; ?></h4>
                              <a class="btn text-white" href="technician.php">View</a>
                               </div>
                          </div>
                        </div>
                      </div>
                      <div class="mx-5 mt-5 text-center ">
                        <p class="bg-dark text-white p-2">List of Requesters</p>
                        <?php  
                 $sql ="SELECT * FROM userlogin_tb";
                   $result = $conn->query($sql);
                   if($result->num_rows > 0){
                    echo ' 
                    <table class="table table-dark">
                     <thead>
                     <tr>
                     <th scope="col">Requester</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     </tr>
                     </thead>
                     <tbody>';
                     while($row = $result->fetch_assoc()){
                    echo '<tr>';
                     echo '<td>'.$row["u_login_id"].'</td>';
                     echo '<td>'.$row["u_name"].'</td>';
                     echo '<td>'.$row["u_email"].'</td>';
                     echo '</tr>';
                   }
                     echo '</tbody>
                     </table>
                    ';
                   }else{
                    echo '0 Results';
                   }
                        ?>
                      </div>
                    </div>  <!--END Dashboard 2nd column-->

<?php   

include('includes/footer.php');
?>