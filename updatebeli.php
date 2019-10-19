<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = mysqli_query ($dbh,"UPDATE datapenjualan SET kd_pembeli = '$_POST[kd_pembeli]',
                                     nm_barang1 = '$_POST[nm_barang1]',
									 nm_barang2 = '$_POST[nm_barang2]',
									 nm_barang3 = '$_POST[nm_barang3]',
                                 WHERE id = '$_POST[id]' ");
   
}

header("location:index.php");
?>