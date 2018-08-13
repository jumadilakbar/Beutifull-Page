<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi Klinik Rumah Sakit Sadewa Yogyakarta</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    include 'koneksi.php';
    session_start();
    $username=$_SESSION['username'];
    $id_user = $_SESSION['id_user'];
    include 'header.php';
    ?>
    <hr>

    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <?php
          include 'sidebar.php';
           ?>
        </div>

        <div class="col-9">
          <?php
          include 'home.php';
           ?>
        </div>
      </div>
    </div>

  </body>
</html>
