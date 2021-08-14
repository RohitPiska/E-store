<?php

  $con = mysqli_connect("localhost", "root","","e_store")or die(mysqli_error($con));
  if (!isset($_SESSION['email'])) {
    session_start();
  }

 ?>
