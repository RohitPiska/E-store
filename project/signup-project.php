<?php require 'common-project.php'; ?>
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
    <title>Sign Up | Electronics Store</title>

  </head>
  <body>
    <?php require 'header-project.php'; ?>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
            <h2 class="modal-title">Login</h2>
          </div>
          <div class="modal-body">
            <p class="text-warning">Login to make a purchase</p>
            <form class="" action="signup-script-project.php" method="post">
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Enter your password" pattern=".{6,0}" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-info btn-block" name="button">Login</button>
              </div>
              <hr>
              <div class="text-center">
                <a href="forgot.php">Forgot password?</a>
                <p>Don't have an account? <a href="signup-project.php">Register</a></p>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br>
    <div class="container container-edit">
      <div class="row row-style">
        <div class="col-lg-6">
          <img src="13.png" alt="img" class="img-responsive">
        </div>
        <div class="col-lg-4 col-lg-offset-2">
          <h2> Sign Up </h2>
          <form action="signup-script-project.php" method="post">
            <div class="form-group">
              <input type="text" required="true" id="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <?php if(isset($_GET['name_error'])){
                echo $_GET['name_error'];
              } ?>
            </div>
            <div class="form-group">
              <input type="text" id="email" required="true" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
              <?php if(isset($_GET['m1'])){
                echo $_GET['m1'];
              } ?>
            </div>
            <div class="form-group">
              <input type="password" id="password" required="true" name="password" pattern=".{6,}" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <?php if(isset($_GET['password_error'])){
                echo $_GET['password_error'];
              } ?>
            </div>
            <div class="form-group">
              <input type="number" id="number" name="number" required="true" pattern="^[789]\d{9}$" class="form-control" placeholder="Contact No.">
            </div>
            <div class="form-group">
              <?php if(isset($_GET['m2'])){
                echo $_GET['m2'];
              } ?>
            </div>
            <div class="form-group">
              <input type="text" id="city" name="city" class="form-control" required="true" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" id="address" name="address" class="form-control" required="true" placeholder="Address">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer style="position:fixed;bottom:0;" >
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
  </body>
</html>
