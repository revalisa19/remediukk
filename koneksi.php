<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "apkpembayaranspp";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
	die(mysql_error($koneksi));
}
?>