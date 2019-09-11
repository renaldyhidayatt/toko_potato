<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Master Data Barang</title>
	<link href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet'>
	<script type='text/javascript' src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
</head>
<body>
<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<h5 class='card-header info-color white-text text-center py-4'>
    <strong>LIST BARANG</strong>
</h5>
<a href='barang_input.php' class='btn btn-primary active'>Tambah barang</a>
<div><form method='POST' action='barang_cari.php'>
Kata pencarian: <input type='text' name='keyword'>
<input type='submit' value='Cari'>
</form></div>
<table id='dtBasicExample' width=100% cellspacing='0' class='table'>
	<tr>
		<th class='th-sm' scope='col'>No</th>
		<th class='th-sm' scope='col'>ID Barang</th>
		<th class='th-sm' scope='col'>Kode Barang</th>
		<th class='th-sm' scope='col'>Nama Barang</th>
		<th class='th-sm' scope='col'>Harga</th>
		<th class='th-sm' scope='col'>Foto</th>
		<th class='th-sm' scope='col'>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi,"SELECT * FROM barang");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo "
		<tbody>
		<tr>
			<td>$no</td>
			<td>$r[id_barang]</td>
			<td>$r[kd_barang]</td>
			<td>$r[nama_barang]</td>
			<td>$r[harga]</td>
			<td><img src='../foto_barang/$r[foto]' width=150></td>
			<td>
				<a href='barang_detail.php?id=$r[id_barang]' class='fa fa-eye'></a> &nbsp;
				<a href='barang_edit.php?id=$r[id_barang]' class='fa fa-edit'></a> &nbsp;
				<a href='aksi_barang_delete.php?id=$r[id_barang]' onclick='return confirm('Yakin Hapus Data Barang?')' class='fa fa-trash'></a>
			</td>
	</tr>
		</tbody>";
	$no=$no+1;
	}
	echo "</table>";
	include "../database/bawah.php";
?>
</body>
</html>