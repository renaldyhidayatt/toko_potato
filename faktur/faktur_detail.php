<?php
include "../database/atas.php";
include "../database/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM faktur where id_faktur='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Detail Data Absensi</h2>
	<table border='0' width='100%' cellspacing='2' cellpadding='2'>
		<tr><td>ID Faktur</td><td>$r[id_faktur]</td></tr>
		<tr><td>No Faktur</td><td>$r[no_faktur]</td></tr>
		<tr><td>Qty</td><td>$r[qty]</td></tr>
		<tr><td>Kode Barang</td><td>$r[kd_barang]</td></tr>
		<tr><td>ID Pelanggan</td><td>$r[id_pelanggan]</td></tr>
		
        
	</table>";
	include "../database/bawah.php";
?>