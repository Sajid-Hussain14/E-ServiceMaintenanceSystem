<?php
     $db_host = "localhost";
     $db_user = "root";
     $db_password = "";
     $db_name = "newosms";
     $db_port = 3306;
      //CREATE CONNECTION
      $conn = new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);

      //CHECKING THE DB CONNECTION
      if ($conn == true) {
      //	echo "connected successfully";
      }else{
      	echo "failed";
      }
?>