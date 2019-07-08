<div class="header-hal">
    <h1>Daftar KARTU KELUARGA</h1>
    <hr>
</div>

<div class="container" id="" style="">

	<form class="" id="" method="POST" action="">

		<table align="center">
				<tr>
					<td> <h4>NIK</h4> </td>
					<td> <input type="text" class="form-control" name="NIK" placeholder="Masukan NIK"> </td>
				</tr>
				<tr>
					<td> <h4>NAMA KEPALA</h4> </td>
					<td> <input type="text" class="form-control" name="NAMA" placeholder="Nama Kepala"> </td>
				</tr>
				<tr>
					<td> <h4>ALAMAT</h4> </td>
					<td> <input type="" class="form-control" name="ALAMAT" placeholder="ALamat"> </td>
				</tr>
				<tr>
					<td> <h4>KODE POS</h4> </td>
					<td> <input type="text" class="form-control" name="POS" placeholder="Kode POS"> </td>
				</tr>
				<tr>
					<td> <h4>TELEPON</h4> </td>
					<td> <input type="" class="form-control" name="TLP" placeholder="Telepon"> </td>
				</tr>
				<tr>
					<td> <h4>KODE PROVINSI</h4> </td>
					<td> <input type="" class="form-control" name="PRO" placeholder="Kode Provinsi"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KABUPATEN</h4> </td>
					<td> <input type="" class="form-control" name="KAB" placeholder="Kode Kabupaten"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KECAMATAN</h4> </td>
					<td> <input type="" class="form-control" name="KEC" placeholder="KOde Kecamatan"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KELURAHAN</h4> </td>
					<td> <input type="" class="form-control" name="KEL" placeholder="KOde Kelurahan"> </td>
				</tr>
				<tr>
					<td> <input type="submit" class="btn btn-md btn-primary" name="simpan" value="Daftar"> </td>
				</tr>
		</table>
	</form>

</div>


<?php

if (isset($_POST['simpan'])) {

	$nik 		  = $_POST['NIK'];
	$nama         = $_POST['NAMA'];
	$alamat       = $_POST['ALAMAT'];
	$pos          = $_POST['POS'];
	$tlp          = $_POST['TLP'];
	$pro          = $_POST['PRO'];
	$kab          = $_POST['KAB'];
	$kec          = $_POST['KEC'];
	$kel          = $_POST['KEL'];

	$insert = $objAdmin->insertKK($nik, $nama, $alamat, $pos, $tlp, $pro, $kab, $kec, $kel);

	if ($insert) {
		echo '
			<script> alert("Register berhasil") </script>
		';
	}else{
		echo '
			<script> alert("Register gagal") </script>
		';
	}
}
