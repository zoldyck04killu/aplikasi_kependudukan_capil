<?php
// require_once 'config/autoload.php';

require_once 'config/config.php';
require_once 'config/connection.php';
include('models/admin.php');
$obj = new Connection($host, $user, $pass, $db);
$objAdmin = new Admin($obj);
?>

<html lang="en" dir="ltr">
  <head>

    <title></title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css"/>

    <script src="<?php echo base_url(); ?>assets/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->

    <script src="<?=base_url();?>assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="?view=home">CAPIL Tabalong</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?view=home">Beranda
          <span class="sr-only">(current)</span></a>
      </li>
      <?php if (@$_SESSION['user']) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?view=logout">Logout</a>
        </li>
      <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="?view=login">Login</a>
          </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Saran</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pendaftaran
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="?view=daftar-ktp">KTP</a>
          <a class="dropdown-item" href="?view=daftar-kk">Kartu Keluarga</a>
          <a class="dropdown-item" href="?view=daftar-akte">Akte Kelahiran</a>
          <a class="dropdown-item" href="?view=daftar-users">Users</a>

        </div>
      </li>
    </ul>
  </div>
</nav>

        <!-- MAIN -->
        <div class="col">

            <h1>
                <?php include('page/page.php'); ?>
            </h1>

        </div>

</body>
<script type="text/javascript">
    $(document).ready( function () {
      $('#table').DataTable();
    } );
</script>
</html>
