<div class="header-hal">
    <h1>Data KTP</h1>
    <hr>
    <a href="?view=daftar-ktp" class="btn btn-sm btn-primary">Register KTP</a>
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
        <th>PILIHAN</th>
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
        <td>
          <div class="btn-group">
            <a href="?view=edit-ktp&nik=<?=$a->nik ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-ktp&nik=<?=$a->nik ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>
