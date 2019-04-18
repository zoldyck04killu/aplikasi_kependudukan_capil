<?php
session_start();


// rubah data di bawah ini sessuai phpmyadmin
$host = 'localhost';
$user = 'root';
$pass = '123';
$db   = 'aplikasi_capil_tabalong';
// end

function base_url($url = null ) {
	$base_url = "http://localhost/aplikasi_kependudukan_capil/";
	if ($url != null ) {
		return $base_url."/".$url;
	} else  {
			return $base_url;
	}
}
