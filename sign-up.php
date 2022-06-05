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
    <title>Sign Up</title>
</head>

<body>

    <div class="d-flex justify-content-center container mt-5 mb-3">
        <div class="border rounded border-primary col-md-4 ">
            <form action="signup-config.php" method="POST">

                <!-- sign up text -->
                <div class="form-group mt-3 mb-2 text-center text-secondary">
                    <h3>Sign Up</h3>
                </div>

                <!-- first name -->
                <div class="form-group mt-3 mb-2">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                </div>

                <!-- last name -->
                <div class="form-group my-2">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                </div>

                <!-- Email or number -->
                <div class="form-group my-2">
                    <input type="text" class="form-control" name="eon" id="eon" placeholder="Email or Number" required>
                </div>

                <!-- password -->
                <div class="form-group my-2">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
                </div>
                <!-- Confirm-Password -->
                <div class="form-group my-2">
                    <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm-password" required>
                </div>

                <!-- login button -->
                <button type="submit" class="btn mb-3 btn-sm btn-block btn-primary">Sign Up</button>

            </form>

        </div>
    </div>

</body>

</html>