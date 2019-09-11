<?php
include "../database/atas.php";
include "../database/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM pelanggan where id_pelanggan='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h5 class='card-header info-color white-text text-center py-4'>
    <strong>Edit Master Pelanggan</strong>
</h5>
<form method='POST' action='aksi_pelanggan_edit.php' enctype='multipart/form-data'>
	<table border='0' width='100%' cellspacing='3' cellpadding='3'>
		<tr><td><input type=hidden name='id_pelanggan' size='10' value='$r[id_pelanggan]'></td></tr>
		<tr><td>Nama pelanggan</td><td><div class='md-form'>
		<input type='text' name='nama_pelanggan' id='form1' class='form-control' value='$r[nama_pelanggan]'>
	  </div></td></tr>
		<tr><td>Nomor Telepon</td><td><div class='md-form'>
		<input type='text' name='nomor_telepon' id='form1' class='form-control' value='$r[nomor_telepon]'>
	  </div></td></tr>
		<tr><td>Jenis Kelamin</td><td><div class='md-form'>
		<input type='text' name='jk' id='form1' class='form-control' value='$r[jk]'>
	  </div></td></tr>
		<tr>
			<td colspan=2>
				<input type='submit' value='Update' class='btn btn-primary'>
				<input type='reset' value='Reset' class='btn btn-danger'>
			</td>
		</tr>
	</table>
</form>";
include "../database/bawah.php";
?>