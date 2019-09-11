<?php
include "../database/atas.php";
include "../database/koneksi.php";
echo "
<center><h2>Input Data Absensi</h2></center>
<form method='POST' action='aksi_faktur_input.php' enctype='multipart/form-data'>
<center><table border='0' width='550px' cellspacing='3' cellpadding='3'>

		<tr><td><input type=hidden name='id_faktur' size='30'></td></tr>
		<tr><td>No Faktur</td><td><div class='md-form'>
		<input type='text' name='no_faktur' id='form1' class='form-control' placeholder='NO FAKTUR'>
	  </div></td></tr>
	  <tr><td>Qty</td><td><div class='md-form'>
		<input type='text' name='qty' id='form1' class='form-control' placeholder='Qty'>
	  </div></td></tr>
	  <tr><td>KODE BARANG</td> 
			<td>
				<select name='kd_barang'> 
					<option value='0'>---- Pilih Kode Barang ----</option>";
					$tampil=mysqli_query($koneksi,"SELECT * FROM barang");	
					while ($r=mysqli_fetch_array($tampil)){	
						echo "<option value='$r[kd_barang]'>$r[nama_barang]</option>";
					}
					echo "
				</select>
			</td>
		</tr>
        <tr><td>ID Pelanggan</td> 
			<td>
				<select name='id_pelanggan'> 
					<option value='0'>---- Pilih ID Pelanggan ----</option>";
					$tampil=mysqli_query($koneksi,"SELECT * FROM pelanggan");	
					while ($r=mysqli_fetch_array($tampil)){	
						echo "<option value='$r[id_pelanggan]'>$r[nama_pelanggan]</option>";
					}
					echo "
				</select>
			</td>
		</tr>
		<tr>
		<td colspan=2>
		<br>
		<center><input type='submit' value='SIMPAN' class='btn btn-primary'>
				<input type='reset' value='CANCEL' class='btn btn-danger'></center>
			</td>
		</tr>
	</table></center>
</form>";
include "../database/bawah.php";
?>