<?php require 'common-project.php' ?>
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
    <title>Cart || Lifestyle Store</title>
  </head>
  <body>
    <?php include 'header-project.php'; ?>
    <br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row row_style">
        <div class="col-xs-6 ">
          <br>
          <br><br>
          <div class="container text-center">
            <table class="table table-striped">
              <?php
                $sum=0;
                $user_id = $_SESSION['id'];
                $select_products =  "SELECT items_project.price AS price, items_project.id, items_project.name AS name FROM users_items_project JOIN items_project ON users_items_project.item_id = items_project.id WHERE users_items_project.user_id='$user_id' and status='Added to cart'";
                $select_products_result = mysqli_query($con,$select_products) or die(mysqli_error($con));
                $product_rows_fetched = mysqli_num_rows($select_products_result);
                if($product_rows_fetched==0){
                  echo "Add items to the the cart first!";
                }else{ ?>
              <thead>
                <tr><th>Item Number</th> <th>Item Name</th> <th>Price</th> <th></th> </tr>
              </thead>
              <tbody>
                <?php
                    while ($row = mysqli_fetch_array($select_products_result)) {
                      $sum = $sum + $row['price'];
                      $id = $row['id'];
                      echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove-project.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                    }
                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success-project.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                  }
                ?>
              </tbody>
            </table>
            <hr>
          </div>
        </div>
      </div>
    </div>
    <footer style="position:fixed;bottom:0;">
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
  </body>
</html>
