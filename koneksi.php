<?php
$db_host = "10.0.0.219";
$db_user = "admin";
$db_pass = "Hisyam123;";
$db_name = "Tokol";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
