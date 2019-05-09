<div class="header-hal">
    <h1>Daftar Akte</h1>
    <hr>
</div>

<div class="container" id="" style="">

	<form class="" id="" method="POST" action="">

		<table align="center">
				<tr>
					<td> <h4>ID AKTE</h4> </td>
					<td> <input type="text" class="form-control" name="ID" placeholder="Masukan ID"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA</h4> </td>
					<td> <input type="text" class="form-control" name="NAMA" placeholder="Nama Lengkap"> </td>
				</tr>
				<tr>
					<td> <h4>TANGGAL LAHIR</h4> </td>
					<td> <input type="date" class="form-control" name="TGL" placeholder="Tanggal Lahir"> </td>
				</tr>
				<tr>
					<td> <h4>TEMPAT LAHIR</h4> </td>
					<td> <input type="text" class="form-control" name="TEMPAT" placeholder="Tempat Lahir"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA AYAH</h4> </td>
					<td> <input type="" class="form-control" name="AYAH" placeholder="Nama Ayah"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA IBU</h4> </td>
					<td> <input type="" class="form-control" name="IBU" placeholder="Nama Ibu"> </td>
				</tr>
					<tr>
					<td> <h4>ANAK KE-</h4> </td>
					<td> <input type="" class="form-control col-md-4" name="KE" placeholder=""> </td>
				</tr>
				<tr>
					<td> <input type="submit" class="btn btn-md btn-primary" name="simpan" value="Daftar"> </td>
				</tr>
		</table>
	</form>

</div>


<?php

if (isset($_POST['simpan'])) {

	$id 	   = $_POST['ID'];
	$nama      = $_POST['NAMA'];
	$tgl       = $_POST['TGL'];
	$tempat    = $_POST['TEMPAT'];
	$ayah      = $_POST['AYAH'];
	$ibu       = $_POST['IBU'];
	$ke        = $_POST['KE'];

	$insert = $objAdmin->insertAKTE($id, $nama, $tgl, $tempat, $ayah, $ibu, $ke);

	if ($insert) {
		echo '
			<script> alert("Berhasil") </script>
		';
	}else{
		echo '
			<script> alert("Gagal") </script>
		';
	}
}
