<?php
  require_once('core/core.php');
  if (isset($_SESSION['login'])) header('location:'.SERVERHOST.'/web/?');
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = get('users', 'username', $username);
    if (!$data) $loginFailed = 'Username tidak ditemukan';
    else {
      if (md5($password) === ($data['password'])) {
        $_SESSION['login'] = ['username' => $data['username'], 'level' => $data['level']];
        header('location:'.SERVERHOST.'/web/?');
      }
      else $loginFailed = 'Password Salah !';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Harupt Web Palembang - Login Page</title>
    <!-- Bootstrap core CSS-->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
                <label for="inputUsername">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login" name="login" />
          </form>
          <br />
          <div class="text-center">
            <?php if (isset($loginFailed)): ?>
              <p style="font-size: 10pt" class="text-danger"><?= $loginFailed ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
