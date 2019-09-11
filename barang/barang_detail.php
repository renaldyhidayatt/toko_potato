<?php
include "../database/atas.php";
include "../database/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM barang where id_barang='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Detail Data Siswa</h2>
	<table border='0' width='100%' cellspacing='2' cellpadding='2'>
		<tr><td valign='top'>Foto</td><td><img src='../foto_barang/$r[foto]' width=150></td></tr>
		<tr><td>ID Brang</td><td>$r[id_barang]</td></tr>
		<tr><td>Kode Barang</td><td>$r[kd_barang]</td></tr>
		<tr><td>Nama Barang</td><td>$r[nama_barang]</td></tr>
		<tr><td>Harga</td><td>$r[harga]</td></tr>
		<tr><td>Foto</td><td>$r[foto]</td></tr>
	</table>";
	include "../database/bawah.php";
?>