<?php
    include 'common-project.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Settings | Electronics Store</title>
</head>
<body>
    <!-- Header -->
    <?php
        require 'header-project.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
    <br><br><br><br><br><br><br>
    <div class="content">
      <div class="container">
      <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default-setting container-edit edit">
        <div class="panel-heading">
          <h2 class="text-center">Change Password</h2>
        </div>
        <div class="panel-body">
            <form action="settings-script-project.php" method="post">
              <div class="form-group">
                <label for="oldPassword">Old Password:</label>
                <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
              </div>
              <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
              </div>
              <div class="form-group">
                <label for="newPasswordRe">Re-type New Password:</label>
                <input type="password" class="form-control" id="newPasswordRe" name="newPasswordRe" required>
              </div>
              <?php
                if(isset($_GET['id'])){
                  echo $_GET['id'];
                }
                ?>
              <input type="submit" class="btn btn-block btn-setting btn-warning" value="Confirm">
            </form>
        </div>
      </div>
      </div>
      </div>
    </div>
    <!-- !Main -->

    <!-- Footer -->
    <footer style="position:fixed;bottom:0;">
      <p class="footer" >Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
    <!-- !Footer -->
</body>
</html>
