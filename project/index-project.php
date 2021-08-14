<?php
  require 'common-project.php';
  if(isset($_SESSION['email'])) {
    header('location: products-project.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Welcome | Electronics Store</title>

  </head>
  <body>
    <?php require 'header-project.php' ;
      require 'modal.php';
    ?>

    <div id="banner_image">
      <div class="container">
        <div id="banner_content" class="col-lg-8">
        <center>  <h1 class="banner-heading">One Stop for all your electronics!</h1>
          <p class="banner">Best prices available!!</p>
          <?php if (isset($_SESSION['email'])) {?>
            <a href="products-project.php" class="btn btn-danger btn-lg active">Shop Now</a></center>
          <?php }else{ ?>
          <a role="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-lg active">Shop Now</a></center>
        <?php } ?>
        </div>
      </div>
    </div>

    <footer>
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
  </body>
</html>
