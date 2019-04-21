<div class="header-hal">
    <h1>Data Kartu Keluarga</h1>
    <hr>
    <a href="?view=daftar-kk" class="btn btn-sm btn-primary">Register KK</a>
</div>
<div class="container mt-5">


  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>ALAMAT </th>
        <th>KODE POS</th>
        <th>TELP</th>
        <th>KODE PROVINSI</th>
        <th>KODE KABUPATEN</th>
        <th>KODE KECAMATAN</th>
        <th>KODE KELURAHAN</th>
        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showKK();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->nik ?></td>
        <td><?=$a->nama ?></td>
        <td><?=$a->alamat ?></td>
        <td><?=$a->kodepos ?></td>
        <td><?=$a->telp ?></td>
        <td><?=$a->kodenopro ?></td>
        <td><?=$a->kodenokab ?></td>
        <td><?=$a->kdoenokec ?></td>
        <td><?=$a->kodenokel ?></td>
        <td>
          <div class="btn-group">
            <a href="?view=edit-kk&nik=<?=$a->nik ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-kk&nik=<?=$a->nik ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>
