<?php
include "../database/koneksi.php";
// include "../database/upload.php";
mysqli_query($koneksi,"INSERT INTO siswa(nis,
										nama_siswa,
										tempat_lahir,
										tgl_lahir,
										jk,
										agama,
										alamat,
										kota,
										telp,
										kd_mapel,
										foto)
							VALUES('$_POST[nis]',
											'$_POST[nama_siswa]',
											'$_POST[tempat_lahir]',
											'$_POST[tgl_lahir]',
											'$_POST[jk]',
											'$_POST[agama]',
											'$_POST[alamat]',
											'$_POST[kota]',
											'$_POST[telp]',
											'$_POST[kd_mapel]',
											'$_POST[foto]')");
echo "<a href='siswa.php'>Data Sudah Masuk...!</a>";

?>
