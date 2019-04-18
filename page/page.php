<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'view/home.php';
}

else if (@$_GET['view'] == 'daftar-ktp') 
{
	include 'view/ktp/daftar-ktp.php';
}


else if (@$_GET['view'] == 'daftar-kk') 
{
	include 'view/kartu-keluarga/daftar-kk.php';
}


else if (@$_GET['view'] == 'daftar-akte') 
{
	include 'view/akte/daftar-akte.php';
}

else
{
  include 'view/404.php';

}
