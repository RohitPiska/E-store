<?php
  require 'common-project.php';

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $regex_name = "/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/";

  if (!preg_match($regex_name,$name)){
    header('location: signup-project.php?name_error= Enter a valid name!');
  }

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";

  if (!preg_match($regex_email,$email)){
    header('location: signup-project.php?m1= Enter a valid email!');
  }

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = md5($password);

  $regex_password = "/^.{6,}$/";

  if (!preg_match($regex_password,$password)){
    header('location: signup-project.php?password_error = Your password should contain minimum 6 characters');
  }
  $number = $_POST['number'];
  $number = mysqli_real_escape_string($con, $number);
  $regex_number = "/^[789]\d{9}$/";

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con,$city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con ,$address);

  $select_query = "SELECT * FROM users_project WHERE email = '$email'";
  $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
  $total_rows_fetched = mysqli_num_rows($select_query_result);
   if($total_rows_fetched > 0){
         $error = "<span class='red'>Email Already Exists</span>";
         header('location:signup-project.php?m1='.$error);
     }else if(!preg_match($regex_email , $email)){
         $error = "<span class='red'>Incorrect Email format</span>";
         header('location:signup-project.php?m1='.$error);
     }else if(!preg_match($regex_number , $number )){
         $error = "<span class='red'>Incorrect Contact Number</span>";
         header('location:signup-project.php?m2='.$error);
     }else{
          $user_registration_query = "INSERT INTO users_project (name,email,password,contact,city,address) values ('$name','$email','$password','$number','$city','$address')";
          $user_registration_submit = mysqli_query($con,$user_registration_query);
          $id = mysqli_insert_id($con);
          $_SESSION['id'] = $id;
          $_SESSION['email'] = $email;
          header('location: products-project.php');
         }
 ?>
