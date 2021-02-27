<?php
require('index.php');


$conn = mysqli_connect("remotemysql.com", "MJhhpLhYIU", "p5TCebHmJF");
$db = mysqli_select_db($conn, 'MJhhpLhYIU');

if (isset($_POST['submit'])){


        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        // $item_image = $_POST['item_image'];

        $data = "INSERT INTO users (`username`, `email`, `password`, `role`) VALUES ('$username', '$email', '$password', '$role')";

        mysqli_query($conn,$data);
        mysqli_close($conn);

    }





 ?>

 <div class="content pb-0">
             <div class="animated fadeIn">
                <div class="row">
                   <div class="col-lg-12">
                      <div class="card">
                         <div class="card-header"><strong>Users</strong><small> Form</small></div>
                         <form method="post" enctype="multipart/form-data">
 							<div class="card-body card-block">
 							   <div class="form-group">

 								</div>
 								<div class="form-group">
 									<label for="username" class=" form-control-label">Username</label>
 									<input type="text" name="username" placeholder="Enter username" class="form-control" required value="">
 								</div>

 								<div class="form-group">
 									<label for="email" class=" form-control-label">Email address</label>
 									<input type="text" name="email" placeholder="Enter email address" class="form-control" required value="">
 								</div>


 								<div class="form-group">
 									<label for="password" class=" form-control-label">Password</label>
 									<input type="text" name="password" placeholder="Enter password" class="form-control" required value="">
 								</div>

                <div class="form-group">
 									<label for="role" class=" form-control-label">Role</label>
 									<input type="text" name="role" placeholder="Enter role" class="form-control" required value="">
 								</div>


 							   <button id="submit" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
 							   <span id="payment-button-amount">Submit</span>
 							   </button>

 							</div>
 						</form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
