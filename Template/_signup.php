
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

    <title>Register</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div mt-5">
          <form action="signup.php" method="post">
            <h3 class="text-center mt-3">Register</h3>


            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
              <?php foreach ($errors as $error): ?>
              <li><?php echo $error; ?></li>
            <?php endforeach; ?>
            </div>
          <?php endif; ?>


            <div class="form-group mt-3" >
              <label for="username">Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
            </div>
            <div class="form-group mt-3">
              <label for="email">Email</label>
              <input type="email" name="email" value="<?php echo $email; ?>"  class="form-control form-control-lg">
            </div>
            <div class="form-group mt-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
            </div>
            <div class="form-group mt-3">
              <label for="passwordConf">Confirm Password</label>
              <input type="password" name="passwordConf" class="form-control form-control-lg">
            </div>


            <div class="form-group mt-3">
              <label class="mt-3 control-label">Select User Type</label>
              <div class="col-sm-6">
                <select class="form-control mt-3" name="role">
                  <option value="" selected="selected"> - select role - </option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
            </div>


            <div class="form-group mt-3">
              <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg col-sm-12 py-2 mt-3">Sign Up</button>
            </div>


            <p class="text-center mt-3">Already a member? <a href="login.php">Sign In</a></p>
          </form>
        </div>
      </div>
    </div>



  </body>
</html>
