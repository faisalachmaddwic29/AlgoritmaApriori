<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = mysqli_query ($dbh,"UPDATE data SET kd_barang = '$_POST[kd_barang]',
                                     nm_barang = '$_POST[nm_barang]',
                                     stok = '$_POST[stok]',
                                     hrg_beli  = '$_POST[hrg_beli]',
									  hrg_jual  = '$_POST[hrg_jual]'
                                 WHERE id = '$_POST[id]' ");
   
}

header("location:index.php");
?>