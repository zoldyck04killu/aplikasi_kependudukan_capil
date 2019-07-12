<div class="header-hal">
    <h1>Data Akte</h1>
    <hr>
    <?php if (@$_SESSION['user']) { ?>
    <a href="?view=daftar-akte" class="btn btn-sm btn-primary">Daftar Akte</a>
  <?php } ?>
</div>
<div class="container mt-5">


  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>ID AKTE</th>
        <th>NAMA</th>
        <th>TANGGAL LAHIR</th>
        <th>TEMPAT LAHIR</th>
        <th>NAMA AYAH</th>
        <th>NAMA IBU</th>
        <th>ANAK KE</th>
        <?php if (@$_SESSION['hak_akses'] == 2) { ?>
        <th>STATUS CETAK</th>
        <th>PILIHAN</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showAKTE();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->no_akte ?></td>
        <td><?=$a->nama ?></td>
        <td><?=$a->tanggal_lahir ?></td>
        <td><?=$a->tempat_lahir ?></td>
        <td><?=$a->nama_ayah ?></td>
        <td><?=$a->nama_ibu ?></td>
        <td><?=$a->anakke ?></td>
        <?php if (@$_SESSION['hak_akses'] == 2) { ?>
          <td>
            <?php
            if ($a->status_cetak == 0) { ?>
              <a href="?view=status-cetak-akte&nik=<?=$a->no_akte ?>&status=<?=$a->status_cetak ?>" class="btn btn-sm btn-dark">Belum Cetak</a>
            <?php
            }else{ ?>
            <a href="?view=status-cetak-akte&nik=<?=$a->no_akte ?>&status=<?=$a->status_cetak ?>" class="btn btn-sm btn-success">Sudah Cetak</a>
            <?php
            }
            ?>
          </td>
        <td>
          <div class="btn-group">
            <a href="view/laporan/laporan-akte.php?id=<?=$a->id_akte ?>" class="btn btn-sm btn-warning">Laporan</a>
            <a href="?view=edit-akte&id=<?=$a->id_akte ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-akte&id=<?=$a->id_akte ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
        <?php } ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>
