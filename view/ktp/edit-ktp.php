<?php
$nik = @$_GET['nik'];
$data = $objAdmin->editKTP($nik)->fetch_object();
 ?>


 <div class="header-hal">
     <h1>Edit KTP</h1>
     <hr>
 </div>

 <div class="container" id="" style="">

 	<form class="" id="" method="POST" action="">

 		<table align="center">
        <input type="hidden" name="id_ktp" value="<?=$data->id_ktp ?>">
    		<tr>
 					<td> <h4>NIK</h4> </td>
 					<td> <input type="number" class="form-control" name="NIK" placeholder="Masukan NIK KTP" value="<?=$data->nik ?>" > </td>
 				</tr>
 				<tr>
 					<td> <h4>NAMA</h4> </td>
 					<td> <input type="text" class="form-control" name="NAMA" placeholder="Masukan Nama Lengkap" value="<?=$data->nama ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>TGL LAHIR</h4> </td>
 					<td> <input type="date" class="form-control" name="TGL_LAHIR" value="<?=$data->tanggal_lahir ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>TEMPAT LAHIR</h4> </td>
 					<td> <input type="" class="form-control" name="TEMPAT_LAHIR" placeholder="Tempat Lahir" value="<?=$data->tempat_lahir ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>JENIS KELAMIN</h4> </td>
 					<td>
 						<select name="JEKEL" class="form-control">
            <option value="<?=$data->jekel ?>"><?=$data->jekel ?></option>
 						<option value="laki-laki">Laki-Laki</option>
 						<option value="perempuan">Perempuan</option>
 						</select>
 					</td>
 				</tr>
 				<tr>
 					<td> <h4>ALAMAT</h4> </td>
 					<td> <input type="text" class="form-control" name="ALAMAT" placeholder="Alamat" value="<?=$data->alamat ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>RT/RW</h4> </td>
 					<td> <input type="" class="" name="RT" placeholder="RT" value="<?=$data->rt ?>"> <input type="" class="" name="RW" placeholder="RW" value="<?=$data->rw ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>AGAMA</h4> </td>
 					<td> <input type="" class="form-control" name="AGAMA" placeholder="Agama" value="<?=$data->agama ?>"> </td>
 				</tr>
 				<tr>
 					<td> <h4>KEWARGANEGARAAN</h4> </td>
 					<td> <input type="" class="form-control" name="KEWARGANEGARAAN" placeholder="Kewarganegaraan" value="<?=$data->kewarganegaraan ?>"> </td>
 				</tr>
 				<tr>
 					<td> <input type="submit" class="btn btn-md btn-primary" name="update" value="Update"> </td>
 				</tr>
 		</table>
 	</form>

 </div>


 <?php

 if (isset($_POST['update'])) {
  $id_ktp 		      = $_POST['id_ktp'];
 	$nik 		      = $_POST['NIK'];
 	$nama         = $_POST['NAMA'];
 	$tgl_lahir    = $_POST['TGL_LAHIR'];
 	$tempat_lahir = $_POST['TEMPAT_LAHIR'];
 	$jekel        = $_POST['JEKEL'];
 	$alamat       = $_POST['ALAMAT'];
 	$rt           = $_POST['RT'];
 	$rw           = $_POST['RW'];
 	$agama        = $_POST['AGAMA'];
 	$kewar        = $_POST['KEWARGANEGARAAN'];

 	$update = $objAdmin->updateKTP($id_ktp, $nik, $nama, $tgl_lahir, $tempat_lahir, $jekel, $alamat, $rt, $rw, $agama, $kewar);

 	if ($update) {
 		echo '
 			<script>
      alert("Update berhasil")
      window.location = "?view=data-ktp"
      </script>

 		';
 	}else{
 		echo '
 			<script> alert("Update gagal") </script>
 		';
 	}
 }
