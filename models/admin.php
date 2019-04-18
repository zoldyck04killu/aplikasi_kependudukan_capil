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
