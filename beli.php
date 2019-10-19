<h1 align="center">Pembelian Barang</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Pembelian Barang</legend>
	
	<form action="prosesbeli.php" method="post">
	
	<p>
            Kode Pembeli <br />
            <input type="text" name="kd_pembeli" required />
        </p>
        
        <p>
			Nama Barang 1<br />
            <input type="text" name="nm_barang1"  />
        </p>
		  <p>
			Nama Barang 2<br />
            <input type="text" name="nm_barang2"  />
        </p>
        
        <p>
            Nama Barang 3<br />
            <input type="text" name="nm_barang3" />
        </p>
		<input type="submit" value="Beli" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
	</fieldset>
	<br />
<center><a href="index.php">&Lt; Tabel Barang</a></center>