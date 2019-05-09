<?php

/**
 *
 */
class Admin
{

  private $mysqli;

  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  // daftar (register) masyarakat/users

  function simpanUsername($Username, $password_hash)
  {
    $db = $this->mysqli->conn;
    // jika hak_akses 0 adalah Admin
    // jika hak_akses 1 adalah users
    $hak_akses = 1;
    $db->query("INSERT INTO user (username, password, hak_akses) VALUES ('$Username','$password_hash','$hak_akses')") or die ($db->error);
    return true;
  }

  // LOGIN

  public function login($username, $password){
    // jika hak_akses 0 adalah Admin
    // jika hak_akses 1 adalah users
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM user WHERE username = '$username' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
          if (password_verify($password, $cek_2['password'])) {
              $_SESSION['user'] = $cek_2['username'];
              $_SESSION['hak_akses'] = $cek_2['hak_akses']; //session
               //session
              return true;
          } else {
              return false; // password salah
          }
  }

  public function logout(){
    @$_SESSION['user'] == FALSE;
    @$_SESSION['hak_akses'] == FALSE;
    unset($_SESSION);
    session_destroy();
  }

  // KTP

  public function insertKTP($nik, $nama, $tgl_lahir, $tempat_lahir, $jekel, $alamat, $rt, $rw, $agama, $kewar)
  {
	  	$db  = $this->mysqli->conn;
      $date_permohonan = date('Y/m/d');
	  	$sql = " INSERT INTO ktp  VALUES ('$nik', '$nama', '$tgl_lahir', '$tempat_lahir', '$jekel', '$alamat', '$rt', '$rw', '$agama', '$kewar','0','$date_permohonan') " ;
      $query = $db->query($sql);
      $sql = " INSERT INTO hasil_cetak (NIK,nama,tgl_permohonan,jenis_permohonan) VALUES ('$nik','$nama','$date_permohonan','KTP') " ;
	  	$query = $db->query($sql);
	  	if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }


  public function showKTP()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM ktp ";
    $query = $db->query($sql);
    return $query;
  }

  public function editKTP($nik)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM ktp WHERE nik = '$nik' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateKTP($nik, $nama, $tgl_lahir, $tempat_lahir, $jekel, $alamat, $rt, $rw, $agama, $kewar)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE ktp SET nama = '$nama', tanggal_lahir = '$tgl_lahir', tempat_lahir = '$tempat_lahir', jekel = '$jekel', alamat = '$alamat', rt = '$rt', rw = '$rw', agama = '$agama', kewarganegaraan = '$kewar' WHERE nik = '$nik' ";
    $query = $db->query($sql);
    if ($query) {
        return true;
    }else {
        return false;
    }
  }

  public function hapusKTP($nik)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM ktp WHERE nik = '$nik' ";
    $query = $db->query($sql);
    $sql = " DELETE FROM hasil_cetak WHERE NIK = '$nik' && jenis_permohonan = 'KTP' ";
    $query = $db->query($sql);
    return true;
  }

  // END KTP


  // KARTU KELUARGA

  public function insertKK($nik, $nama, $alamat, $pos, $tlp, $pro, $kab, $kec, $kel)
  {
  		$db = $this->mysqli->conn;
      $date_permohonan = date('Y/m/d');

  		$sql = " INSERT INTO kartu_keluarga VALUES ('$nik', '$nama', '$alamat', '$pos', '$tlp', '$pro', '$kab', '$kec', '$kel','0','$date_permohonan') ";
  		$query = $db->query($sql);
      $sql = " INSERT INTO hasil_cetak (NIK,nama,tgl_permohonan,jenis_permohonan) VALUES ('$nik','$nama','$date_permohonan','Kartu Keluarga') ";
  		$query = $db->query($sql);
  		if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }

  public function showKK()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM kartu_keluarga ";
    $query = $db->query($sql);
    return $query;
  }

  public function editKK($nik)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM kartu_keluarga WHERE nik = '$nik' ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateKK($nik, $nama, $alamat, $pos, $tlp, $pro, $kab, $kec, $kel)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE kartu_keluarga SET nama = '$nama', alamat = '$alamat', kodepos = '$pos', telp = '$tlp', kodenopro = '$pro', kodenokab = '$kab', kdoenokec = '$kec', kodenokel = '$kel' WHERE nik = '$nik' ";
    $query = $db->query($sql);
    if ($query) {
        return true;
    }else{
        return false;
    }
  }

  public function hapusKK($nik)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM kartu_keluarga WHERE nik = '$nik' ";
    $query = $db->query($sql);
    $sql = " DELETE FROM hasil_cetak WHERE NIK = '$nik' && jenis_permohonan = 'Kartu Keluarga' ";
    $query = $db->query($sql);
    return true;
  }

  // END KARTU KELUARGA


  // AKTE

  public function insertAKTE($id, $nama, $tgl, $tempat, $ayah, $ibu, $ke)
  {
  		$db = $this->mysqli->conn;
      $date_permohonan = date('Y/m/d');

  		$sql = " INSERT INTO akte_kelahiran VALUES ('$id', '$nama', '$tgl', '$tempat', '$ayah', '$ibu', '$ke','0','$date_permohonan') ";
  		$query = $db->query($sql);
      $sql = " INSERT INTO hasil_cetak (NIK,nama,tgl_permohonan,jenis_permohonan) VALUES ('$id','$nama','$date_permohonan','Akte Kelahiran') ";
  		$query = $db->query($sql);
  		if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }

  public function showAKTE()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM akte_kelahiran ";
    $query = $db->query($sql);
    return $query;
  }

  public function editAKTE($id)
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM akte_kelahiran WHERE id_akte = '$id'  ";
    $query = $db->query($sql);
    return $query;
  }

  public function updateAKTE($id, $nama, $tgl, $tempat, $ayah, $ibu, $ke)
  {
    $db = $this->mysqli->conn;
    $sql = " UPDATE akte_kelahiran SET nama = '$nama', tanggal_lahir = '$tgl', tempat_lahir = '$tempat', nama_ayah = '$ayah', nama_ibu = '$ibu', anakke = '$ke' WHERE id_akte = '$id' ";
    $query = $db->query($sql);
    if ($query) {
      return true;
    }else{
      return false;
    }
  }

  public function hapusAKTE($id)
  {
    $db = $this->mysqli->conn;
    $sql = " DELETE FROM akte_kelahiran WHERE id_akte = '$id' ";
    $query = $db->query($sql);
    $sql = " DELETE FROM hasil_cetak WHERE NIK = '$id' && jenis_permohonan = 'Akte Kelahiran'";
    $query = $db->query($sql);
    if ($query) {
        return true;
    }else{
        return false;
    }
  }

  // END AKTE

  // SARAN
  public function insertSaran($nik, $saran)
  {
      $db = $this->mysqli->conn;
      $sql = " INSERT INTO saran VALUES ('$nik', '$saran') ";
      $query = $db->query($sql);
      if ($query) {
        return true;
      }else{
        return false;
      }
  }

  public function showSaran()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM saran ";
    $query = $db->query($sql);
    return $query;
  }

  public function statusCetakKTP($id,$status)
  {
    $db = $this->mysqli->conn;
    if ($status == 0) {
        $status_baru = 1;
    }else {
      $status_baru = 0;
    }
    $sql = " UPDATE ktp SET status_cetak = '$status_baru' WHERE nik = '$id' ";
    $query = $db->query($sql);
    $sql = " UPDATE hasil_cetak SET status = '$status_baru' WHERE NIK = '$id' ";
    $query = $db->query($sql);
    if ($query) {
      return true;
    }else{
      return false;
    }
  }

  public function statusCetakAKTE($id,$status)
  {
    $db = $this->mysqli->conn;
    if ($status == 0) {
        $status_baru = 1;
    }else {
      $status_baru = 0;
    }
    $sql = " UPDATE akte_kelahiran SET status_cetak = '$status_baru' WHERE id_akte = '$id' ";
    $query = $db->query($sql);
    $sql = " UPDATE hasil_cetak SET status = '$status_baru' WHERE NIK = '$id' ";
    $query = $db->query($sql);
    if ($query) {
      return true;
    }else{
      return false;
    }
  }

  public function statusCetakKK($id,$status)
  {
    $db = $this->mysqli->conn;
    if ($status == 0) {
        $status_baru = 1;
    }else {
      $status_baru = 0;
    }
    $sql = " UPDATE kartu_keluarga SET status_cetak = '$status_baru' WHERE nik = '$id' ";
    $query = $db->query($sql);
    $sql = " UPDATE hasil_cetak SET status = '$status_baru' WHERE NIK = '$id' ";
    $query = $db->query($sql);
    if ($query) {
      return true;
    }else{
      return false;
    }
  }

  public function showHasilCetak()
  {
    $db = $this->mysqli->conn;
    $sql = " SELECT * FROM hasil_cetak ";
    $query = $db->query($sql);
    return $query;
  }

}// end class

?>
