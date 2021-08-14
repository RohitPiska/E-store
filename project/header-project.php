<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" name="button" data-toggle="collapse" data-target="#navBar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index-project.php" class="navbar-brand">Electronics Store</a>
    </div>
    <div class="collapse navbar-collapse" id="navBar">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="about.php"> <span class="glyphicon glyphicon-tasks"></span> About Us</a> </li>
        <li> <a href="contact.php"> <span class="glyphicon glyphicon-earphone"></span> Contact Us</a> </li>
        <?php
        if(!isset($_SESSION['email'])){ ?>
        <li> <a role="button" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-user"></span> Login</a> </li>
        <li> <a href="signup-project.php"> <span class="glyphicon glyphicon-log-in"></span> Sign Up</a> </li>

      <?php }else{ ?>
        <li> <a href="cart-project.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>
        <li> <a href="settings-project.php"><span class="glyphicon glyphicon-cog"></span> Settings</a> </li>
        <li> <a href="logout-project.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a> </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
