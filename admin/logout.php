<?php
//logout user

  session_destroy();
  unset($_SESSION['id']);
  unset($_SESSION['username']);
  unset($_SESSION['email']);
  unset($_SESSION['verified']);
  unset($_SESSION['role']);
  header('location: ../login.php');
  exit();


?>
