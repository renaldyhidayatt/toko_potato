<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<h5 class='card-header info-color white-text text-center py-4'>
    <strong>DAFTAR BARANG</strong>
</h5>
<form method='POST' action='aksi_pelanggan_input.php' enctype='multipart/form-data'>
<center><table border='0' width='550px' cellspacing='3' cellpadding='3'>
		<tr><td><input type=hidden name='id_pelanggan' size='30'></td></tr>
		<tr><td>Nama Pelanggan</td><td><div class='md-form'>
		<input type='text' name='nama_pelanggan' id='form1' class='form-control' placeholder='NAMA PELANGGAN'>
	  </div></td></tr>
		<tr><td>Nomor Telepon</td><td><div class='md-form'>
		<input type='text' name='nomor_telepon' id='form1' class='form-control' placeholder='Nomor Telepon'>
	  </div></td></tr>
	  <tr><td>Jenis Kelamin</td>
	  <td>Pria <input type='radio' name='jk' value='Pria'> 
		  Wanita <input type='radio' name='jk' value='Wanita'>
	  </td>
	</tr>		
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