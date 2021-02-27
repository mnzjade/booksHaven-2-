<?php
require('index.php');


$conn = mysqli_connect("remotemysql.com", "MJhhpLhYIU", "p5TCebHmJF");
$db = mysqli_select_db($conn, 'MJhhpLhYIU');

if (isset($_POST['submit'])){


        $item_name = $_POST['item_name'];
        $item_author = $_POST['item_author'];
        $item_description = $_POST['item_description'];
        $item_price = $_POST['item_price'];
        // $item_image = $_POST['item_image'];

        $data = "INSERT INTO product (`item_name`, `item_author`, `item_description`, `item_price`) VALUES ('$item_name', '$item_author', '$item_description', '$item_price')";

        mysqli_query($conn,$data);


        if (!mysqli_query($conn, $data)) {
    echo "Error: " . mysqli_error($conn);

      mysqli_close($conn);
}
    }





 ?>

 <div class="content pb-0">
             <div class="animated fadeIn">
                <div class="row">
                   <div class="col-lg-12">
                      <div class="card">
                         <div class="card-header"><strong>Product</strong><small> Form</small></div>
                         <form method="post" enctype="multipart/form-data">
 							<div class="card-body card-block">
 							   <div class="form-group">

 								</div>
 								<div class="form-group">
 									<label for="name" class=" form-control-label">Product Name</label>
 									<input type="text" name="item_name" placeholder="Enter book title" class="form-control" required value="">
 								</div>

 								<div class="form-group">
 									<label for="author" class=" form-control-label">Book Author</label>
 									<input type="text" name="item_author" placeholder="Enter author" class="form-control" required value="">
 								</div>

                <div class="form-group">
                  <label for="description" class=" form-control-label">Short Description</label>
                  <textarea name="item_description" placeholder="Enter book short description" class="form-control" required></textarea>
                </div>


 								<div class="form-group">
 									<label for="price" class=" form-control-label">Price</label>
 									<input type="text" name="item_price" placeholder="Enter product price" class="form-control" required value="">
 								</div>




 								<!-- <div class="form-group">
 									<label for="categories" class=" form-control-label">Image</label>
 									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
 								</div> -->

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
