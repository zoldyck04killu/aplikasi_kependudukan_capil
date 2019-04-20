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
	  	$sql = " INSERT INTO ktp  VALUES ('$nik', '$nama', '$tgl_lahir', '$tempat_lahir', '$jekel', '$alamat', '$rt', '$rw', '$agama', '$kewar') " ;
	  	$query = $db->query($sql);
	  	if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }

  // END KTP


  // KARTU KELUARGA

  public function insertKK($nik, $nama, $alamat, $pos, $tlp, $pro, $kab, $kec, $kel)
  {
  		$db = $this->mysqli->conn;
  		$sql = " INSERT INTO kartu_keluarga VALUES ('$nik', '$nama', '$alamat', '$pos', '$tlp', '$pro', '$kab', '$kec', '$kel') ";
  		$query = $db->query($sql);
  		if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }

  // END KARTU KELUARGA


  // AKTE

  public function insertAKTE($id, $nama, $tgl, $tempat, $ayah, $ibu, $ke)
  {
  		$db = $this->mysqli->conn;
  		$sql = " INSERT INTO akte_kelahiran VALUES ('$id', '$nama', '$tgl', '$tempat', '$ayah', '$ibu', '$ke') ";
  		$query = $db->query($sql);
  		if ($query) {
	  		return true;
	  	}else{
	  		return false;
	  	}
  }

  // END AKTE

}// end class

?>
