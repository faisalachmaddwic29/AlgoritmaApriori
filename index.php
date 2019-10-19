<?php
include 'koneksi.php';
?>
<style>
	h1 {
		font-family:Arial, Helvetica, sans-serif;
	}
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 70%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
		
    }
    thead tr {
	background-color : white;
	font-weight:bold;
	cursor:pointer;
	padding:10px;
	color:#333;
	text-shadow:1px 1px 0px #CCC;
	font-size:14px;
    }

	table, th, td {
	background-color : #CECECE;
	border-collapse:collapse;
	border:1px solid #999;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	
	
 
</style>

<h1 align="center"><a href = "assocrules.php"> ANALISIS ALGORITMA APRIORI </a></h1>

<center><a href="input.php">Input Barang &Gt; </a></center>

<br />
<table border="1">
    <thead>
	 <th colspan="7" align="left" ><div style="margin:0 0 0 20px"><h4><center>Data Barang <center /></h4></div></th>
	  </thead>
        <tr >
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
			<th>Edit / Delete</th>
        </tr>
  

    

    <?php
    $sql = mysqli_query($dbh,"SELECT * FROM data ORDER BY id");
    $no  = 1;
	while ($brg = mysqli_fetch_array($sql)){
    ?>
        <tr class = "ganjil">
            <td><?php echo $no++; ?></td>
            <td><?php echo $brg['kd_barang'] ?></td>
            <td><?php echo $brg['nm_barang'] ?></td>
            <td><?php echo $brg['stok'] ?></td>
            <td><?php echo "Rp.". number_format( $brg['hrg_beli'], 2,',','.'); ?></td>
			<td><?php echo "Rp.". number_format( $brg['hrg_jual'], 2,',','.'); ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $brg['id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?id=<?php echo $brg['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
            </td>
        </tr>
    <?php
	}
    ?>
	


</table>


<br>
<br>

<center><a href="beli.php">Pembelian Barang &Gt; </a></center>
<?php  

 $query=mysqli_query($dbh,"select * from datapenjualan"); 


 ?> 
 <table border="1" width="1200px">
  <thead>
 <th colspan="6" align="left" ><div style="margin:0 0 0 20px"><h4><center>Data pembeli <center /></h4></div></th>
  </thead>
 <br>
<tr >
  <th>No</th><th>Kode Pembeli</th> 
  <th>Nama Barang 1</th>
  <th>Nama Barang 2</th><th>Nama Barang 3</th> 
  <th>Edit / Delete</th>
 </tr>
 
<?php 
 $no=0; 
 
 while($row=mysqli_fetch_array($query)){ 
 ?>
<tr> 
  <td><?php echo $no=$no+1;?></td> 
  <td><?php echo $row['kd_pembeli'];?></td> 
  <td><?php echo $row['nm_barang1'];?></td>  
  <td><?php echo $row['nm_barang2'];?></td> 
  <td><?php echo $row['nm_barang3'];?></td> 
  <td align="center">
                <a href="editbeli.php?id=<?php echo $row['id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapusbeli.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
            </td>
 </tr>
 
<?php 
 }
 ?>
 </th>
 </table>
<?php 
?>
</th>


<?php
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
<?php
$my_file = 'belian.txt';
unlink($my_file);


$separator = ",";

$query = mysqli_query($dbh,"SELECT * FROM datapenjualan ");
while ($data = mysqli_fetch_array($query)){
    // mengisi data mhs ke file text dengan separator
$fp = fopen("belian.txt", "a");
fwrite($fp, $data ['nm_barang1'].$separator .$data ['nm_barang2'].$separator .$data['nm_barang3']. "\r\n");
fclose($fp);
}
?>

