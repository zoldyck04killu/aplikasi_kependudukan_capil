<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'view/home.php';
}

else if (@$_GET['view'] == 'login')
{
	include 'view/login.php';
}

elseif (@$_GET['view'] == 'logout')
{
    $objAdmin->logout();
    echo '<script>
    window.location="?view=login";
     </script>';
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

else if (@$_GET['view'] == 'daftar-users')
{
  include 'view/masyarakat/daftar-users.php';
}

else
{
  include 'view/404.php';

}
