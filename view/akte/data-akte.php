<div class="header-hal">
    <h1>Data Akte</h1>
    <hr>
    <a href="?view=daftar-akte" class="btn btn-sm btn-primary">Register Akte</a>
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
        <th>PILIHAN</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data = $objAdmin->showAKTE();
      while ($a = $data->fetch_object()) {
      ?>
      <tr>
        <td><?=$a->id_akte ?></td>
        <td><?=$a->nama ?></td>
        <td><?=$a->tanggal_lahir ?></td>
        <td><?=$a->tempat_lahir ?></td>
        <td><?=$a->nama_ayah ?></td>
        <td><?=$a->nama_ibu ?></td>
        <td><?=$a->anakke ?></td>
        <td>
          <div class="btn-group">
            <a href="?view=edit-akte&id=<?=$a->id_akte ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?view=hapus-akte&id=<?=$a->id_akte ?>" onclick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus</a>
          </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>