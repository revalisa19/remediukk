<?php
include 'koneksi.php';
$NIS = $_GET['NIS'];
$query = "delete from siswaa where NIS='$NIS'";
mysqli_query($koneksi, $query);
header("location:tabelsiswa.php");
?>