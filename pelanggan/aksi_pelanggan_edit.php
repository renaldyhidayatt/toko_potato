<?php
include "../database/koneksi.php";
mysqli_query($koneksi,"UPDATE pelanggan SET nama_pelanggan = '$_POST[nama_pelanggan]',
											nomor_telepon = '$_POST[nomor_telepon]',
											jk = '$_POST[jk]'
									WHERE id_pelanggan = '$_POST[id_pelanggan]' ");
header('location:index.php');
?>