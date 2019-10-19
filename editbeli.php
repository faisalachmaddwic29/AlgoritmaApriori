<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $query = mysqli_query ($dbh,"SELECT * FROM datapenjualan WHERE id = '$_GET[id]'");
    $row  = mysqli_fetch_assoc($query);		
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($row === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>
<h1 align="center">Edit Pembelian</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Pembelian</legend>
    
    <form action="updatebeli.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<p>
			Kode Lengkap<br />
            <input type="text" name="kd_pembeli" required value="<?php echo $row['kd_pembeli']; ?>"/>
		</p>
		
        <p>
            Nama Barang 1<br />
            <input type="text" name="nm_barang1"  value="<?php echo $row['nm_barang1']; ?>"/>
        </p>
        
        <p>
            Nama Barang 2<br />
            <input type="text" name="nm_barang2"  value="<?php echo $row['nm_barang2']; ?>"/>
        </p>
        
        <p>
            Nama Barang 3<br />
            <input type="text" name="nm_barang3"  value="<?php echo $row['nm_barang3']; ?>" />
        </p>
		 <p>
				<input type="submit" value="Simpan" />
				<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>

    </form>
</fieldset>
<br />
<center><a href="index.php">&Lt; Tabel Biodata</a></center>
