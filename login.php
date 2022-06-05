<?php
include_once "session.php";
?>

<?php
require_once "bootstrap.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

</head>

<body>
  <div class="d-flex justify-content-center container mt-5 mb-3">
    <div class="border rounded border-primary col-md-4 ">

      <form action="login-config.php" method="POST">

        <!-- login text -->
        <div class="form-group mt-3 mb-3 text-center text-secondary" >
          <h3>LOGIN FORM</h3>
        </div>

        <!-- username -->
        <div class="form-group my-2">
          <input type="text" class="form-control" name="eon" id="eon" placeholder="Email or Phone Number" required>
        </div>

        <!-- password -->
        <div class="form-group my-2">
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
        </div>

        <!-- checkbox -->
        <div class="">
          <input type="checkbox"> <label for="checkbox">Remember Me</label>
        </div>

        <!-- login button -->
        <button type="submit" class="btn btn-sm btn-block btn-primary">Log In</button>

        <!-- login with other text  -->
        <div class="text-center  mt-3">
          <a href="" class="btn"> <label for="" class="text-primary font-weight-bold"> Log in with others</label></a>
        </div>

        <!-- horizontal line -->
        <div class="border-top border-dark"></div>

        <!-- forgot password -->
        <div class="text-center">
          <a href="" class="btn"> <label for="" class="text-primary">Forgot Password</label></a>
        </div>
    </div>
  </div>

  <!-- sign up text button -->
  <div class="d-flex justify-content-center container mt-3 mb-3">
    <div class="border rounded border-primary col-md-4">
      <footer class="text-center">
        <p class="text-primary mt-3">Don't have an account?<span><a class="btn font-weight-bold text-primary" href="sign-up.php">Sign UP</a></span></p>
      </footer>
      </form>
    </div>
  </div>
</body>

</html>