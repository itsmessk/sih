<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>

<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>
  <style>
    body {
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size: cover;
      background-repeat: no-repeat;
    }

    .login-title {
      text-shadow: 1px 1px #4c1d1d
    }
  </style>
  <h1 class="text-center text-light py-5 login-title" style="text-align: center;"><b>
      <?php  //echo $_settings->info('name') ?>
      Procurement360: Complete Procurement <br> and Vendor-Payment Solution
    </b></h1>
    
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline">
      <div class="card-header text-center">
        <a href="./" class="h1"><b>Login</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="login-frm" action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="form-control" name="type" id="roleSelect">
              <option value="0">Select Role</option>
              <option value="1">Admin</option>
              <option value="2">Staff</option>
              <option value="3">Board of Directors (BoD)</option>
              <option value="4">Vendor</option>
            </select>
          </div>
          <div id="roleMessage" style="color: red;">Please select a role.</div>

          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->

        <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function () {
      end_loader();
    })
  </script>
  <script>
  document.getElementById("roleSelect").addEventListener("change", function () {
    var selectedValue = this.value;
    var roleMessage = document.getElementById("roleMessage");

    if (selectedValue === "0") {
      roleMessage.style.display = "block"; // Display the message
    } else {
      roleMessage.style.display = "none"; // Hide the message
    }
  });
</script>
</body>

</html>