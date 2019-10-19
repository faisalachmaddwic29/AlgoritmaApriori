<h1 align="center">Input Barang</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Input Barang</legend>
    
    <form action="simpan.php" method="post">
        <p>
            Kode Barang<br />
            <input type="text" name="kd_barang" required />
        </p>
        
        <p>
			Nama Barang<br />
            <input type="text" name="nm_barang" required />
        </p>
        
        <p>
            Stok Barang<br />
            <input type="text" name="stok" required />
        </p>
        
        <p>
		    Harga Beli<br />
            <input type="text" name="hrg_beli" required />
        </p>
		
        <p>
		    Harga Jual<br />
            <input type="text" name="hrg_jual" required />
        </p>
		
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="index.php">&Lt; Tabel Barang</a></center>