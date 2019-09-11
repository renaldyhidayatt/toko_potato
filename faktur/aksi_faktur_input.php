<?php
include "../database/koneksi.php";
// include "upload.php";
mysqli_query($koneksi,"INSERT INTO faktur(id_faktur,
										no_faktur,
										qty,
										kd_barang,
										id_pelanggan)

							VALUES ('$_POST[id_faktur]',
                                    '$_POST[no_faktur]',
                                    '$_POST[qty]',
									'$_POST[kd_barang]',
                                    '$_POST[id_pelanggan]')");

echo "<a href='index.php'>Data Sudah Masuk...!</a>";

?>
