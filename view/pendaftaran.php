<div class="header-hal">
  <center>
    <a  href="?view=data-ktp">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">KTP</button>
    </a>
    <a  href="?view=data-kk">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">KARTU KELUARGA</button>
    </a>
    <a  href="?view=data-akte">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">AKTE KELAHIRAN</button>
    </a>
    <!-- <a  href="?view=daftar-users">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">USER</button>
    </a> -->
    <!-- <a  href="view/laporan/laporan-pendaftaran-penduduk-KTP.php">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">LAPORAN KTP</button>
    </a>
    <a  href="view/laporan/laporan-pendaftaran-penduduk-AKTE.php">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">LAPORAN AKTE</button>
    </a>
    <a  href="view/laporan/laporan-pendaftaran-penduduk-KK.php">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">LAPORAN KK</button>
    </a> -->
    <?php if (@$_SESSION['hak_akses'] == 2) { ?>
    <a  href="view/laporan/laporan-pendaftaran-penduduk.php">
      <button type="button" class="btn btn-outline-dark btn-lg btn-block">LAPORAN </button>
    </a>
  <?php } ?>
  </center>
</div>

<style media="screen">
  .header-hal
  {
    margin-top: 50px;
  }

  .btn-block
  {
      margin-top: 3rem;
      width: 50%;

  }

</style>
