<?php
include "../database/koneksi.php";
mysqli_query($koneksi,"INSERT INTO pelanggan(id_pelanggan,nama_pelanggan,nomor_telepon,jk)
                                VALUES ('$_POST[id_pelanggan]','$_POST[nama_pelanggan]','$_POST[nomor_telepon]','$_POST[jk]')");
echo "<a href='index.php' class='btn btn-primary active'>Data Sudah Masuk...!</a>";
?>