<?php
include "../database/koneksi.php";
mysqli_query($koneksi,"UPDATE barang SET kd_barang = '$_POST[kd_barang]',
											nama_barang = '$_POST[nama_barang]',
											harga = '$_POST[harga]',
											foto = '$_POST[foto]'
									WHERE id_barang = '$_POST[id_barang]' ");
header('location:barang.php');
?>