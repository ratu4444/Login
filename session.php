<?php
session_start();
// include_once "bootstrap.php";
// var_dump($_SESSION["Value"]);
if($_SESSION["Value"] == true ){?>
<script type="text/javascript"> 

window.location = 'welcome.php';

</script>

<?php


// }else {
//     die('<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>Sorry!</strong> You have to login first.
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>');

// }
}
?>