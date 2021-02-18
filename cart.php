<?php
ob_start();

 //include header.php file
 include ('header.php');
?>

<?php


//include _cart.php file if it is not empty



//include _cart.php file if it is not empty
count($product->getData(table:'cart')) ? include ('Template/_cart.php'): include ('Template/notFound/_cart_notFound.php');




 ?>




<?php
 //include footer.php file
 include ('footer.php');
?>
