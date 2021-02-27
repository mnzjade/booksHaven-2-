<!-- for login sign up -->

<?php

session_start();

require 'database/db.php';


$errors = array();
$username = "";
$email = "";



//if user clicks on the sign up button

if (isset($_POST['signup-btn']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConf = $_POST['passwordConf'];
  $role = $_POST['role'];

  // validation
  if (empty($username))
  {
    $errors['username'] = "Username required";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $errors['email'] = "Email address is invalid";
  }


  if (empty($email))
  {
    $errors['email'] = "Email required";
  }
  if (empty($password))
  {
    $errors['password'] = "Password required";
  }

  if ($password !== $passwordConf)
  {
    $errors['password'] = "The two passwords do not match";
  }

  $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
  $stmt = $conn->prepare($emailQuery);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $userCount = $result->num_rows;
  $stmt->close();



  if ($userCount > 0)
  {
    $errors['email'] = "Email already exists";
  }


if (count($errors) === 0)
{
  $password = password_hash($password, PASSWORD_DEFAULT);
  $token = bin2hex(random_bytes(50));
  $verified = false;

  $sql = "INSERT INTO users (username, email, verified, token, password, role) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('ssbsss', $username, $email, $verified, $token, $password, $role);



  if ($stmt->execute())
  {
    //login users
    $user_id = $conn->insert_id;
    $_SESSION['id'] = $user_id;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['verified'] = $verified;
    $_SESSION['role'] = $role;


    //set flash message

    $_SESSION['message'] = "You are now logged in!";
    $_SESSION['alert-class'] = "alert-success";
    header('location: index.php');
    exit();
  }
  else {
    $errors['db_error'] = "Database error: failed to register";
  }
}
}


//if the user clicks login

if (isset($_POST['login-btn']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  // validation
  if (empty($username))
  {
    $errors['username'] = "Username required";
  }

  if (empty($password))
  {
    $errors['password'] = "Password required";
  }


  if (count($errors) === 0)
  {
    $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();


    if (password_verify($password, $user['password']))
    {
      // login succes
      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['verified'] = $user['verified'];

      if ($user['role'] == 'admin')
      {
        //set flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: admin/index.php');
        exit();

      }
      else
      {
        //set flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();

      }



    }

    else {
      $errors['login_fail'] = "Wrong credentials";
    }
  }

}

//logout user
if (isset($_GET['logout']))
{
  session_destroy();
  unset($_SESSION['id']);
  unset($_SESSION['username']);
  unset($_SESSION['email']);
  unset($_SESSION['verified']);
  unset($_SESSION['role']);
  header('location: index.php');
  exit();
}


 ?>
