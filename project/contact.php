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
    <title>Contact Us | Electronics Store</title>

  </head>
  <body>
    <?php require 'header-project.php' ;
      require 'modal.php';
    ?>
    <br><br><br>
    <hr><hr>
    <div class="container container-edit edit">
      <div class="row row-style">
        <div class="col-lg-9">
          <h2>LIVE SUPPORT</h2>
          <h4>24 Hours | 7 Days a week | 365 Days a year live techinical support</h4>
          <p>It is a long established fact that a reader will be distracted by the
            readable content of a page when looking at its layout. The point of
            using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters. There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered alteration in some form, by injected humour,
            or randomised words which don't look even slightly believable. If you are going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything
            embarrassing hidden in the middle of text.</p>
        </div>
        <div class="col-lg-3">
          <br>
          <img src="support.jpg" alt="responsive image" class="img-responsive">
        </div>
      </div>
      <div class="row row-style">
        <div class="col-lg-8">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="name" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea name="name" placeholder="Enter you message here..." class="form-control" rows="8" id="message" cols="80"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-4">
          <h2>Company Information:</h2>
          <p><b>Address:</b> 7th Avenue,Washington D.C., <br> USA . <br><b>Phone:</b> (000)-9999-124536 .
             <br><b>Email:</b> info@company.com .<br><b>Follow on: </b>Twitter, Facebook, Instagram .</p>
        </div>

      </div>
    </div>
    <hr>
    <footer>
      <p class="footer">Copyright &copy; Electronics Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
    </footer>
  </body>
</html>
