<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $query = mysqli_query ($dbh,"SELECT * FROM data WHERE id = '$_GET[id]'");
    $brg  = mysqli_fetch_assoc($query);		
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($brg === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>
<h1 align="center">Input Biodata</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Input Biodata</legend>
    
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $brg['id']; ?>" />
		<p>
			Kode Lengkap<br />
            <input type="text" name="kd_barang" required value="<?php echo $brg['kd_barang']; ?>"/>
		</p>
		
        <p>
            Nama Lengkap<br />
            <input type="text" name="nm_barang" required value="<?php echo $brg['nm_barang']; ?>"/>
        </p>
        
        <p>
            Stok Barang<br />
            <input type="text" name="stok" required value="<?php echo $brg['stok']; ?>"/>
        </p>
        
        <p>
            Harga Barang<br />
            <input type="text" name="hrg_beli" required value="<?php echo $brg['hrg_beli']; ?>" />
        </p>
		  
        <p>
            Harga Barang<br />
            <input type="text" name="hrg_jual" required value="<?php echo $brg['hrg_jual']; ?>" />
        </p>
        
        <p>
				<input type="submit" value="Simpan" />
				<input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="index.php">&Lt; Tabel Biodata</a></center>
