<?php require('index.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Products</title>
  </head>
  <body>

    <div class="content pb-0">
    	<div class="orders">
    	   <div class="row">
    		  <div class="col-xl-12">
    			 <div class="card">
    				<div class="card-body">
    				   <h4 class="box-title">Products </h4>
    				   <h4 class="box-link"><a href="manage_product.php">Add Product</a> </h4>
    				</div>
    				<div class="card-body--">
    				   <div class="table-stats order-table ov-h">
    					  <table class="table ">
    						 <thead>
    							<tr>
    							   <th>ID</th>
    							   <th>Name</th>
                     <th>Author</th>
                     <th>Description</th>
                     <th>Price</th>
    							   <th>Image</th>
                     <th>Delete</th>
    							</tr>

                  <?php
                  $sql = "SELECT * FROM product";
                  $result = mysqli_query($conn, $sql);
                  $check_product = mysqli_num_rows($result) > 0;

                  if ($check_product)
                  {
                    while ($row = mysqli_fetch_array($result))
                    {
                      ?>
                      <tr>
        							   <td><?php echo $row['item_id']; ?></td>
        							   <td><?php echo $row['item_name']; ?></td>
                         <td><?php echo $row['item_author']; ?></td>
                         <td><?php echo $row['item_description']; ?></td>
                         <td><?php echo $row['item_price']; ?></td>
        							   <td><img src="<?php echo $item['item_image'] ?>"</td>

                         <td>
                           <form action="products.php" method="post">
                             <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
                             <button type="submit" class="btn btn-danger" name="delete_btn">DELETE</button>
                           </form>
                         </td>
        							</tr>
                    <?php } ?><?php }
                   ?><?php
                   $conn = mysqli_connect("remotemysql.com", "5JeIdD8vHK", "T2fAEbgdLm");
                   $db = mysqli_select_db($conn, '5JeIdD8vHK');

                   if (isset($_POST['delete_btn']))
                   {
                     $item_id = $_POST['item_id'];

                     $query = "DELETE FROM product WHERE item_id=$item_id ";
                     $query_run = mysqli_query($conn, $query);

                     if (! $query_run)
                     {
                       die('Could not delete data: ' . mysql_error());
                     }
                     else {
                       echo '<script> alert ("Data Deleted") </script>';
                       echo '<script>window.location="products.php"</script>';
                       $mysqli -> close();
                     }


                   } else {
                    echo '<script> alert ("Data Not Deleted") </script>' ?>
            <?php
         }
      ?>

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
