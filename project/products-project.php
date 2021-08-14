<?php require 'common-project.php';
  /*if(!isset($_SESSION['email'])) {
    header('location: index-project.php');
  }*/
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
    <title>Products | Electronics Store</title>
  </head>
  <body>
    <?php require 'header-project.php';
      require 'check-if-added-project.php';
     ?>
    <br><br><br>
    <div class="contatiner-fluid jumbotron-edit">
      <div class="jumbotron text-center">
        <h1>Welcome to our Electronics Store!</h1>
        <p>We bring you the best electronic gadgets from all around the world!</p>
      </div>
      <hr>
      <hr>
      <br>
    </div>
    <div class="container edit">
      <div class="row text-center">
        <h1>Smartphones</h1>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="1.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy VII</h3>
              <p>Price: Rs.35999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(1)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="2.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy Note X</h3>
              <p>Price: Rs.75999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(2)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="3.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy A50</h3>
              <p>Price: Rs.21999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(3)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="4.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy M30</h3>
              <p>Price: Rs.19999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(4)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <h1>Smart Watches</h1>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="5.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy Active</h3>
              <p>Price: Rs.25999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(5)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="6.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy Active 2</h3>
              <p>Price: Rs.35999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(6)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="7.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Fossil X13</h3>
              <p>Price: Rs.27999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(7)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="8.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Apple Watch 2</h3>
              <p>Price: Rs.39999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(8)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <h1>Earbuds</h1>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="9.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy Buds</h3>
              <p>Price: Rs.9999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(9)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="10.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Sam Galaxy Buds 2</h3>
              <p>Price: Rs.15999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(10)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="11.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>Airpods</h3>
              <p>Price: Rs.21999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(11)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail blocking">
            <img src="12.jpg" alt="Smartphone" class="img-responsive">
            <div class="caption">
              <h3>SkullCandy Earpods</h3>
              <p>Price: Rs.9999/-</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              <?php } else {
                      if (check_if_added_to_cart(12)) {
                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                      cart</a>';
                      } else {?>
                        <a href="cart-add-project.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                      }
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr><hr>
    <footer>
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
  </body>
</html>
