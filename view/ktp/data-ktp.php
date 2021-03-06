<div class="header-hal">
    <h1>Data KTP</h1>
    <hr>
    <?php if (@$_SESSION['user']) { ?>
    <a href="?view=daftar-ktp" class="btn btn-sm btn-primary">Daftar KTP</a>
  <?php } ?>
</div>
<div class="container mt-5">


  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>TAGGAL LAHIR </th>
        <th>TEMPAT LAHIR</th>
        <th>JENIS KELAMIN  </th>
        <th>ALAMAT</th>
        <th>RT</th>
        <th>RW</th>
        <th>AGAMA</th>
        <th>NEGARA</th>
        <?php if (@$_SESSION['hak_akses'] == 2) { ?>
        <th>STATUS CETAK</th>
        <th>PILIHAN</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showKTP();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->nik ?></td>
        <td><?=$a->nama ?></td>
        <td><?=$a->tanggal_lahir ?></td>
        <td><?=$a->tempat_lahir ?></td>
        <td><?=$a->jekel ?></td>
        <td><?=$a->alamat ?></td>
        <td><?=$a->rt ?></td>
        <td><?=$a->rw ?></td>
        <td><?=$a->agama ?></td>
        <td><?=$a->kewarganegaraan ?></td>
        <?php if (@$_SESSION['hak_akses'] == 2) { ?>
        <td>
          <?php
          if ($a->status_cetak == 0) { ?>
            <a href="?view=status-cetak-ktp&nik=<?=$a->nik ?>&status=<?=$a->status_cetak ?>" class="btn btn-sm btn-dark">Belum Cetak</a>
          <?php
          }else{ ?>
          <a href="?view=status-cetak-ktp&nik=<?=$a->nik ?>&status=<?=$a->status_cetak ?>" class="btn btn-sm btn-success">Sudah Cetak</a>
          <?php
          }
          ?>
        </td>
        <td>
          <div class="btn-group">
            <a href="view/laporan/laporan-ktp.php?nik=<?=$a->nik ?>" class="btn btn-sm btn-warning">Laporan</a>
            <a href="?view=edit-ktp&nik=<?=$a->nik ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-ktp&nik=<?=$a->nik ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    <?php } ?>
    </tbody>
  </table>

</div>
