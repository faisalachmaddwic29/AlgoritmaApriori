

<?php
include 'koneksi.php';

$my_file = 'item.txt';
unlink($my_file);

$separator = "\t";

$query = mysqli_query($dbh,"SELECT * FROM data ");
while ($data = mysqli_fetch_array($query)){
    // mengisi data mhs ke file text dengan separator
$fp = fopen("item.txt", "a");
fwrite($fp, $data ['nm_barang']. "\r\n");
fclose($fp);
}
?>