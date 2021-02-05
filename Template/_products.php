<!-- PRODUCTS AREA -->

<?php
 $product_shuffle = $product->getData();

//request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //CALL METHOD addToCart
  $Cart->addToCart($_POST['user_id'],$_POST['item_id']);

}

 ?>


<section id="products">
  <div class="container py-5">
    <h4 class="font-rubik font-size-20">FEATURED PRODUCTS</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">
      <?php foreach ($product_shuffle as $item) {?>
        <div class="item py-2">
        <div class="product font-raleway">
          <a href="#"><img src="<?php echo $item['item_image'] ?>"style="height: 300px;" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h2><?php echo $item['item_name'] ?></h2>
            <span><?php echo $item['item_description']?></span>
            <div class="price py-2">
              <span>&#8369;<?php echo $item['item_price'] ?></span>
            </div>
            <form method="post">
              <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
              if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                  echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
              }else{
                  echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
              }
              ?>

            </form>
          </div>
        </div>
      </div>
    <?php } //closing foreach function?>

    </div>

    <!-- !owl carousel -->
  </div>

</section>

<!-- !PRODUCTS AREA -->
