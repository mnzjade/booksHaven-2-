<?php
require('index.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Users</title>
  </head>
  <body>

    <div class="content pb-0">
    	<div class="orders">
    	   <div class="row">
    		  <div class="col-xl-12">
    			 <div class="card">
    				<div class="card-body">
    				   <h4 class="box-title">Users </h4>
    				   <h4 class="box-link"><a href="manage_users.php">Add User</a> </h4>
    				</div>
    				<div class="card-body--">
    				   <div class="table-stats order-table ov-h">
    					  <table class="table ">
    						 <thead>
    							<tr>
    							   <th>ID</th>
    							   <th>Username</th>
                     <th>Email</th>
                     <th>Password</th>
                     <th>Role</th>
                     <th>Delete</th>
    							</tr>
                  <?php


                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($conn, $sql);
                  $check_user = mysqli_num_rows($result) > 0;

                  if ($check_user)
                  {
                    while ($row = mysqli_fetch_array($result))
                    {
                      ?>
                      <tr>
        							   <td><?php echo $row['id']; ?></td>
        							   <td><?php echo $row['username']; ?></td>
                         <td><?php echo $row['email']; ?></td>
                         <td><?php echo $row['password']; ?></td>
                         <td><?php echo $row['role']; ?></td>
                         <td>
                           <form action="users.php" method="post">
                             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                             <button type="submit" class="btn btn-danger" name="delete_btn">DELETE</button>
                           </form>
                         </td>
        							</tr>
                    <?php } ?>
                  <?php } ?>

                  <?php
                  $conn = mysqli_connect("remotemysql.com", "MJhhpLhYIU", "p5TCebHmJF");
                  $db = mysqli_select_db($conn, 'MJhhpLhYIU');

                  if (isset($_POST['delete_btn']))
                  {
                    $id = $_POST['id'];

                    $query = "DELETE FROM users WHERE id=$id ";
                    $query_run = mysqli_query($conn, $query);

                    if (! $query_run)
                    {
                      die('Could not delete data: ' . mysql_error());
                    }
                    else {
                      echo '<script> alert ("Data Deleted") </script>';
                      echo '<script>window.location="users.php"</script>';
                    }


                  }

        //           else {
        //            echo '<script> alert ("Data Not Deleted") </script>' ?>
        //    <?php
        // } ?>




    						 </thead>
    						 <tbody>

    						 </tbody>
    					  </table>
    				   </div>
    				</div>
    			 </div>
    		  </div>
    	   </div>
    	</div>
    </div>

  </body>
</html>
