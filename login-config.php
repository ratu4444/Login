<?php
session_start();
include_once "config.php";

$eon = $pass = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $eon = $_POST["eon"];
   $pass = $_POST["pass"]; 

// insert query
   $query = "select eon,pass from info where eon='$eon' and pass='$pass'";
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);
   
   if($row>0){ 
      
      $_SESSION["Value"] = true ;?>
      
      <script type="text/javascript"> window.location='welcome.php';

      </script>

      <?php
   }
   else {
       echo "something wrong with select query";
   }
}
?>  