<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = mysqli_query ($dbh,"INSERT INTO data VALUE
	('', '$_POST[kd_barang]', '$_POST[nm_barang]', '$_POST[stok]', '$_POST[hrg_beli]', '$_POST[hrg_jual]')");
  
}

header("location:index.php");
?>