<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Master Data Pelanggan</title>
	<link href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet'>
	<script type='text/javascript' src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
</head>
<body>
<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<h5 class='card-header info-color white-text text-center py-4'>
    <strong>Master Data Pelanggan</strong>
</h5>
<a href='pelanggan_input.php' class='btn btn-primary active'>Tambah Pelanggan</a>
<div><form method='POST' action='pelanggan_cari.php'>
Kata pencarian: <input type='text' name='keyword'>
<input type='submit' value='Cari'>
</form></div>
<table id='dtBasicExample' width=100% cellspacing='0' class='table'>
	<tr>
		<th class='th-sm' scope='col'>No</th>
		<th class='th-sm' scope='col'>ID Pelanggan</th>
		<th class='th-sm' scope='col'>Nama Pelanggan</th>
		<th class='th-sm' scope='col'>Nomor Telepon</th>
		<th class='th-sm' scope='col'>Jenis Kelamin</th>
		<th class='th-sm' scope='col'>Aksi</th>
	</tr>";
	$tampil=mysqli_query($koneksi,"SELECT * FROM pelanggan");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)){
		echo "
		<tbody>
		<tr>
			<td>$no</td>
			<td>$r[id_pelanggan]</td>
			<td>$r[nama_pelanggan]</td>
			<td>$r[nomor_telepon]</td>
			<td>$r[jk]</td>
			<td>
				<a href='pelanggan_detail.php?id=$r[id_pelanggan]' class='fa fa-eye'></a> &nbsp;
				<a href='pelanggan_edit.php?id=$r[id_pelanggan]' class='fa fa-edit'></a> &nbsp;
				<a href='aksi_pelanggan_delete.php?id=$r[id_pelanggan]' onclick='return confirm('Yakin Hapus Data Barang?')' class='fa fa-trash'></a>
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