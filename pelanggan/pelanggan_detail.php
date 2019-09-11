<?php
include "../database/atas.php";
include "../database/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM pelanggan where id_pelanggan='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Detail Data Siswa</h2>
	<table border='0' width='100%' cellspacing='2' cellpadding='2'>
		<tr><td>ID Pelanggan</td><td>$r[id_pelanggan]</td></tr>
		<tr><td>Nama Pelanggan</td><td>$r[nama_pelanggan]</td></tr>
		<tr><td>Nama Barang</td><td>$r[nomor_telepon]</td></tr>
		<tr><td>Harga</td><td>$r[jk]</td></tr>
	</table>";
	include "../database/bawah.php";
?>