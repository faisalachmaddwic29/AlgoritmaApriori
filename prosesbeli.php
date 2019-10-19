<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = mysqli_query ($dbh,"INSERT INTO datapenjualan VALUE
	('', '$_POST[kd_pembeli]', '$_POST[nm_barang1]', '$_POST[nm_barang2]', '$_POST[nm_barang3]')");
}

header("location:index.php");
?>