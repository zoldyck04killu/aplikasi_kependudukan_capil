<?php
$nik = @$_GET['nik'];
$data = $objAdmin->editKK($nik)->fetch_object();

 ?>

<div class="header-hal">
    <h1>Edit KARTU KELUARGA</h1>
    <hr>
</div>

<div class="container" id="" style="">

	<form class="" id="" method="POST" action="">

		<table align="center">
				<tr>
					<td> <h4>NIK</h4> </td>
					<td> <input type="number" class="form-control" name="NIK" placeholder="Masukan NIK" value="<?=$data->nik ?>" readonly> </td>
				</tr>
				<tr>
					<td> <h4>NAMA KEPALA</h4> </td>
					<td> <input type="text" class="form-control" name="NAMA" placeholder="Nama Kepala" value="<?=$data->nama ?>"> </td>
				</tr>
				<tr>
					<td> <h4>ALAMAT</h4> </td>
					<td> <input type="" class="form-control" name="ALAMAT" placeholder="ALamat" value="<?=$data->alamat ?>"> </td>
				</tr>
				<tr>
					<td> <h4>KODE POS</h4> </td>
					<td> <input type="text" class="form-control" name="POS" placeholder="Kode POS" value="<?=$data->kodepos ?>"> </td>
				</tr>
				<tr>
					<td> <h4>TELEPON</h4> </td>
					<td> <input type="" class="form-control" name="TLP" placeholder="Telepon" value="<?=$data->telp ?>"> </td>
				</tr>
				<tr>
					<td> <h4>KODE PROVINSI</h4> </td>
					<td> <input type="" class="form-control" name="PRO" placeholder="Kode Provinsi" value="<?=$data->kodenopro ?>"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KABUPATEN</h4> </td>
					<td> <input type="" class="form-control" name="KAB" placeholder="Kode Kabupaten" value="<?=$data->kodenokab ?>"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KECAMATAN</h4> </td>
					<td> <input type="" class="form-control" name="KEC" placeholder="KOde Kecamatan" value="<?=$data->kdoenokec ?>"> </td>
				</tr>
					<tr>
					<td> <h4>KODE KELURAHAN</h4> </td>
					<td> <input type="" class="form-control" name="KEL" placeholder="KOde Kelurahan" value="<?=$data->kodenokel ?>"> </td>
				</tr>
				<tr>
					<td> <input type="submit" class="btn btn-md btn-primary" name="update" value="Update"> </td>
				</tr>
		</table>
	</form>

</div>


<?php

if (isset($_POST['update'])) {

	$nik 		      = $_POST['NIK'];
	$nama         = $_POST['NAMA'];
	$alamat       = $_POST['ALAMAT'];
	$pos          = $_POST['POS'];
	$tlp          = $_POST['TLP'];
	$pro          = $_POST['PRO'];
	$kab          = $_POST['KAB'];
	$kec          = $_POST['KEC'];
	$kel          = $_POST['KEL'];

	$update = $objAdmin->updateKK($nik, $nama, $alamat, $pos, $tlp, $pro, $kab, $kec, $kel);

	if ($update) {
    echo '
      <script>
      alert("Update berhasil")
      window.location = "?view=data-kk"
      </script>

    ';
	}else{
		echo '
			<script> alert("Register gagal") </script>
		';
	}
}
