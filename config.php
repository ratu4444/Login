<?php

$conn = mysqli_connect("localhost","root","root","registration");
 if($conn->conect_error){
     die("Connection Error : ". $conn->connect_error);
     
    }
?>