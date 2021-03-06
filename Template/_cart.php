
  <!-- Shopping cart section  -->
<?php

require_once 'controllers/authController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['delete-cart-submit'])){
      $deletedrecord = $Cart->deleteCart($_POST['item_id']);
  } // code...



}

 ?>


 <!-- displaying login details   -->
 <?php if (isset($_SESSION['message'])): ?>
 <div class="strip d-flex justify-content-between px-4 py-1 bg-light <?php echo $_SESSION['alert-class']; ?>">

   <p class="font-raleway font-size-14 text-black-50 m-0"><?php echo $_SESSION['message'];
   unset($_SESSION['message']);
   unset($_SESSION['alert-class']);
   ?></p>
   <p class="font-raleway font-size-14 text-dark m-0">Welcome, <?php echo $_SESSION['username']; ?> </p>

 </div>
 <?php endif; ?>
 <!-- displaying login details   -->


<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-rubik font-size-20">Shopping Cart</h5>

    <!--  shopping cart items   -->
    <div class="row">
      <div class="col-sm-9">
        <?php
        foreach ($product->getData(table:'cart') as $item):
          $cart = $product->getProduct($item['item_id']);
          $subTotal[] = array_map(function($item){

         ?>
        <!-- cart item -->
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">
            <img src="<?php echo $item['item_image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <h5 class="font-rubik font-size-20"><?php echo $item['item_name'] ?></h5>
            <small><?php echo $item['item_author'] ?></small>

            <!-- product qty -->
            <div class="qty d-flex pt-2">
              <div class="d-flex font-raleway w-25">
                <button data-id="<?php  echo $item['item_id'] ?? '0'?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                <input type="text" data-id="<?php  echo $item['item_id'] ?? '0'?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                <button class="qty-up border bg-light" data-id="<?php  echo $item['item_id'] ?? '0'?>"><i class="fas fa-angle-up"></i></button>
              </div>

              <form method="post">
                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                <button type="submit" name="delete-cart-submit" class="btn font-rubik text-danger px-3 border-right">Delete</button>
              </form>


            </div>
            <!-- !product qty -->

          </div>

          <div class="col-sm-2 text-right">
            <div class="font-size-20 text-danger font-rubik">
            &#8369;<span class="product_price" data-id="<?php  echo $item['item_id'] ?? '0'?>"><?php echo $item['item_price'] ?></span>
            </div>
          </div>
        </div>
        <!-- !cart item -->
      <?php
      return $item['item_price'];
    }, $cart); //closing array map function
    endforeach;

       ?>
      </div>
      <!-- subtotal section-->
      <div class="col-sm-3">
        <div class="sub-total border text-center mt-2">
          <h6 class="font-size-12 font-raleway text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
          <div class="border-top py-4">
            <h5 class="font-rubik font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">&#8369;<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
            <a href="checkout.php"><button type="submit" name="proceed-to-buy" class="btn btn-warning mt-3">Proceed to Buy</button></a>
          </div>
        </div>
      </div>
      <!-- !subtotal section-->
    </div>
    <!--  !shopping cart items   -->
  </div>
</section>
<!-- !Shopping cart section  -->
