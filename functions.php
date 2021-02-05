<?php

//REQUIRE MYSQL connection
require('database/DBController.php');


//REQUIRE Product class
require('database/Product.php');

//REQUIRE Cart class
require('database/Cart.php');


// DBController object
$db = new DBController();

//Product Object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart Object
$Cart = new Cart($db);



 ?>
