<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $sql = mysqli_query ($dbh,"DELETE FROM datapenjualan WHERE id = '$_GET[id]'");
}
header("location:index.php")
?>