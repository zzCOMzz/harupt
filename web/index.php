<?php
  require_once('core/core.php');
  if (!isset($_SESSION['login'])) header('location:'.SERVERHOST.'/web/login.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Harupt Web Palembang</title>
    <!-- Bootstrap core CSS-->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="./assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="./assets/vendor/chart.js/Chart.min.js"></script>
    <script src="./assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="./assets/vendor/datatables/dataTables.bootstrap4.js"></script>
  </head>

  <body id="page-top">
    <!-- Navbar -->
    <?php include_once './templates/navbar.php' ?>
    <div id="wrapper">
      <!-- Sidebar -->
      <?php include_once './templates/sidebar.php' ?>
      <div id="content-wrapper">
        <div class="content-container">
          <!-- CONTENT -->
          <?php
            if (isset($_GET['page'])) {
              $page = './pages/'.$_GET['page'];
              if (file_exists($page.'.php')) include_once $page.'.php';
              else include_once './pages/home.php';
            } else {
              include_once './pages/home.php';
            }
          ?>
        </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © <b>Harupt Web Palembang</b> 2018</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="?page=logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin.min.js"></script>
  </body>
</html>
