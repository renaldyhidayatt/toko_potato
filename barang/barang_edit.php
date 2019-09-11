<?php
include "../database/atas.php";
include "../database/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM barang where id_barang='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Edit Data Siswa</h2>
<form method='POST' action='aksi_barang_edit.php' enctype='multipart/form-data'>
	<table border='0' width='100%' cellspacing='3' cellpadding='3'>
		<tr><td><input type=hidden name='id_barang' size='10' value='$r[id_barang]'></td></tr>
		<tr><td>Kode Barang</td><td><input type=text name='kd_barang' size='60' value='$r[kd_barang]'></td></tr>
		<tr><td>Nama Barang</td><td><input type='text' name='nama_barang' size='35' value='$r[nama_barang]'></td></tr>
		<tr><td>Harga</td><td><input type='text' name='harga' size='20' value='$r[harga]'></td></tr>
		<tr><td>Foto</td><td><input type='text' name='foto' size='50' value='$r[foto]'></td></tr>
		<tr>
			<td colspan=2>
				<input type='submit' value='Update'>
				<input type='reset' value='Reset'>
			</td>
		</tr>
	</table>
</form>";
include "../database/bawah.php";
?>