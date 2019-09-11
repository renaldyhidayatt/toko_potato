<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<h5 class='card-header info-color white-text text-center py-4'>
    <strong>DAFTAR BARANG</strong>
</h5>
<form method='POST' action='aksi_barang_input.php' enctype='multipart/form-data'>
<center><table border='0' width='550px' cellspacing='3' cellpadding='3'>
		<tr><td>ID Barang</td><td><div class='md-form'>
		<input type='text' name='id_barang' id='form1' class='form-control' placeholder='ID BARANG'>
	  </div></td></tr>
		<tr><td>Kode Barang</td><td><div class='md-form'>
		<input type='text' name='kd_barang' id='form1' class='form-control' placeholder='KODE BARANG'>
	  </div></td></tr>
		<tr><td>Nama Barang</td><td><div class='md-form'>
		<input type='text' name='nama_barang' id='form1' class='form-control' placeholder='NAMA BARANG'>
	  </div></td></tr>
		<tr><td>Harga</td><td><div class='md-form'>
		<input type='text' name='harga' id='form1' class='form-control' placeholder='HARGA'>
	  </div></td></tr>		
		<tr><td>Foto</td><td><input type='file' name='foto' id='foto'></td></tr>
		<tr>
		<td colspan=2>
		<br>
		<center><input type='submit' value='SIMPAN'  class='btn btn-primary'>
				<input type='reset' value='CANCEL' class='btn btn-danger'></center>
			</td>
		</tr>
	</table></center>
</form>";
include "../database/bawah.php";
?>