<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<h5 class='card-header info-color white-text text-center py-4'>
<strong>Master Data Faktur</strong>
</h5>
<a href='faktur_input.php' class='btn btn-primary'>Tambah Faktur</a>
<br><br>
<table class='table' width=100%>
	<tr>
		<th class='th-sm' scope='col'>No</th>
		<th class='th-sm' scope='col'>ID Faktur</th>
		<th class='th-sm' scope='col'>Nomor Faktur</th>
		<th class='th-sm' scope='col'>qty</th>
		<th class='th-sm' scope='col'>kd barang</th>
		<th class='th-sm' scope='col'>id pelanggan</th>
		<th class='th-sm' scope='col'>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi,"SELECT faktur.id_faktur,faktur.no_faktur,faktur.qty,barang.id_barang,pelanggan.id_pelanggan FROM faktur INNER JOIN barang
	ON barang.kd_barang=faktur.kd_barang
	INNER JOIN pelanggan
	ON pelanggan.id_pelanggan=faktur.id_pelanggan");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo "
		<tr>
			<td>$no</td>
			<td>$r[id_faktur]</td>
			<td>$r[no_faktur]</td>
			<td>$r[qty]</td>
			<td>$r[kd_barang]</td>
			<td>$r[id_pelanggan]</td>
			
			<td align='center'>
				<a href='faktur_detail.php?id=$r[id_faktur]' class='fa fa-eye'></a> &nbsp;
				<a href='faktur_edit.php?id=$r[id_faktur]' class='fa fa-edit'></a> &nbsp;
				<a href='aksi_faktur_delete.php?id=$r[id_faktur]' class='fa fa-trash' onclick=\"return confirm('Yakin Hapus Data?')\"></a>
			</td>
	</tr>";
	$no++;
	}
	echo "</table>";
	echo "<br>
	<form method='POST' action='faktur_cari.php'>
		Kata pencarian: <input type='text' name='keyword'>
		<input type='submit' value='Cari'>
	</form>";
include "../database/bawah.php";
?>