<?php
require_once 'controllers/authController.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div mt-5">
          <form action="login.php" method="post">
            <h3 class="text-center mt-3">Login</h3>


            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
              <?php foreach ($errors as $error): ?>
              <li><?php echo $error; ?></li>
            <?php endforeach; ?>
            </div>
          <?php endif; ?>




            <div class="form-group mt-3" >
              <label for="username">Username or Email</label>
              <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
            </div>
            <div class="form-group mt-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg col-sm-12 py-2 mt-3">Login</button>
            </div>
            <p class="text-center mt-3">Not yet a member? <a href="signup.php">Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>



  </body>
</html>
