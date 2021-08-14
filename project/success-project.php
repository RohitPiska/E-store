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
    <title>Success | Electronics Store</title>
</head>
<body>
  <br><br><br><br><br>
    <!-- Header -->
    <?php
        require 'header-project.php';
         $user_id = $_SESSION['id'];
         $query = "SELECT item_id FROM users_items_project WHERE user_id = '$user_id'";
         $result = mysqli_query($con, $query) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
             $item_id = $row["item_id"];
             $query_update = "UPDATE users_items_project SET status = 'Confirmed' WHERE item_id = '$item_id'";
             $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
         }

    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron" >
                <h3 class="text-center">Thank You for Ordering from our Electronics Store!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h5 class="text-center">To Continue Shopping , Click <a href="products-project.php">here</a></h5>
              </div>
            </div>
          </div>
        </div>
    <!-- !Main -->

    <!-- Footer -->
    <footer style="position:fixed; bottom:0;">
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
    <!-- !Footer -->
</body>
</html>
