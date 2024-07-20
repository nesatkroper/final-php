<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../../dist/fontawesome/css/all.css">
</head>

<body class="login-page bg-body-secondary">
  <div class="login-box">
    <div class="login-logo"> <a href="../index2.html"><b>Drug</b>Dealer</a> </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="./check.php" method="POST">
          <div class="input-group mb-3"> <input type="text" class="form-control" placeholder="Username" name="name">
            <div class="input-group-text"> <i class="fa fa-user"></i> </div>
          </div>
          <div class="input-group mb-3"> <input id="pass" type="password" class="form-control" placeholder="Password" name="pass">
            <div class="input-group-text"> <i id="passIcon" class="fa fa-eye"></i> </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="col-4">
              <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button> </div>
            </div>
          </div>

        </form>
        <div class="social-auth-links text-center mb-3 d-grid gap-2">
          <p>- OR -</p> <a href="#" class="btn btn-primary"> <i class="bi bi-facebook me-2"></i> Sign in using Facebook
          </a> <a href="#" class="btn btn-danger"> <i class="bi bi-google me-2"></i> Sign in using Google+
          </a>
        </div>
        <p class="mb-1"> <a href="forgot-password.html">I forgot my password</a> </p>
        <p class="mb-0"> <a href="register.html" class="text-center">
            Register a new membership
          </a> </p>
      </div>
    </div>
  </div>
  <script src="../../js/main.js"></script>
  <script src="../../../dist/js/adminlte.js"></script>
  <script src="../../../dist/fontawesome/js/all.js"></script>
</body>

</html>