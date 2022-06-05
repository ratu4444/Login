<?php
include_once "config.php";
require_once "bootstrap.php";


$fname = $lname = $eon = $pass = $cpass = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $eon = $_POST["eon"];
   $pass = $_POST["pass"];
   $cpass = $_POST["cpass"];

if ($pass != $cpass){
    echo 'Pass does not match';
}


$query1 = "select eon from info where eon='$eon'";
$result1 = mysqli_query($conn,$query1);
$row = mysqli_fetch_assoc($result1);

if($row>0){ 
    die('<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Opps!</strong>  Sorry! your Email or Phone number already exist, try again with another.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
} else {

   $query ="insert into info (fname, lname, eon, pass, cpass) values ('$fname', '$lname', '$eon', '$pass', '$cpass')";
   $result = mysqli_query($conn,$query);


   if(!$result){
        die("There is a problem in insert query");

   } else {
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>Sucessful!</strong> Welcome! Your registration completed. Go to login page and try login. Thank you.
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
   }

}
}

?>