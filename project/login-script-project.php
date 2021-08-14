<?php

  include 'common-project.php';
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = md5($password);

  $login_select_query = "SELECT id,email FROM users_project WHERE email='$email' AND password='$password' ";
  $login_select_query_result = mysqli_query($con, $login_select_query) or die(mysqli_error($con));

  $total_rows_fetched = mysqli_num_rows($login_select_query_result);
  if($total_rows_fetched >0 ){
    $row = mysqli_fetch_array($login_select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $row['id'];
    header('location: products-project.php');

  }else {
    header("location:login-error-project.php");
  }
  ?>
