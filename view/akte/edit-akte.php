<?php

$id = @$_GET['id'];
$data = $objAdmin->editAKTE($id)->fetch_object();

 ?>

<div class="header-hal">
    <h1>Edit Akte</h1>
    <hr>
</div>

<div class="container" id="" style="">

	<form class="" id="" method="POST" action="">

		<table align="center">
				<tr>
					<td> <h4>ID AKTE</h4> </td>
					<td> <input type="text" class="form-control" name="ID" placeholder="Masukan ID" value="<?=$data->id_akte ?>" readonly> </td>
				</tr>
				<tr>
					<td> <h4>NAMA</h4> </td>
					<td> <input type="text" class="form-control" name="NAMA" placeholder="Nama Lengkap" value="<?=$data->nama ?>"> </td>
				</tr>
				<tr>
					<td> <h4>TANGGAL LAHIR</h4> </td>
					<td> <input type="date" class="form-control" name="TGL" placeholder="Tanggal Lahir" value="<?=$data->tanggal_lahir ?>"> </td>
				</tr>
				<tr>
					<td> <h4>TEMPAT LAHIR</h4> </td>
					<td> <input type="text" class="form-control" name="TEMPAT" placeholder="Tempat Lahir" value="<?=$data->tempat_lahir ?>"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA AYAH</h4> </td>
					<td> <input type="" class="form-control" name="AYAH" placeholder="Nama Ayah" value="<?=$data->nama_ayah ?>"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA IBU</h4> </td>
					<td> <input type="" class="form-control" name="IBU" placeholder="Nama Ibu" value="<?=$data->nama_ibu ?>"> </td>
				</tr>
					<tr>
					<td> <h4>ANAK KE-</h4> </td>
					<td> <input type="" class="form-control col-md-4" name="KE" placeholder="" value="<?=$data->anakke ?>"> </td>
				</tr>
				<tr>
					<td> <input type="submit" class="btn btn-md btn-primary" name="update" value="Update"> </td>
				</tr>
		</table>
	</form>

</div>


<?php

if (isset($_POST['update'])) {

	$id 	     = $_POST['ID'];
	$nama      = $_POST['NAMA'];
	$tgl       = $_POST['TGL'];
	$tempat    = $_POST['TEMPAT'];
	$ayah      = $_POST['AYAH'];
	$ibu       = $_POST['IBU'];
	$ke        = $_POST['KE'];

	$update = $objAdmin->updateAKTE($id, $nama, $tgl, $tempat, $ayah, $ibu, $ke);

	if ($update) {
    echo '
      <script>
      alert("Update berhasil")
      window.location = "?view=data-akte"
      </script>

    ';
	}else{
		echo '
			<script> alert("Register gagal") </script>
		';
	}
}
