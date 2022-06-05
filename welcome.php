<?php
session_start();

require_once "bootstrap.php";
// include_once "bootstrap.php";
// var_dump($_SESSION["Value"]);
if($_SESSION["Value"] == true ){?>

<script type="text/javascript"> 
window.location = 'welcome.php';
</script>

<?php
}else {
    die('<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry!</strong> You have to login first.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');

}

// require "session.php";
// var_dump($_SESSION["Value"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    <a href="logout.php" class="btn btn-primary">Log Out</a>
</body>
</html>