<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
        <h2 class="modal-title">Login</h2>
      </div>
      <div class="modal-body">
        <p class="text-warning">Login to make a purchase</p>
        <form action="login-script-project.php" method="post">
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
