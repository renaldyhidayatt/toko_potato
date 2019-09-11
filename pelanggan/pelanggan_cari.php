<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Master Data Siswa</title>
</head>
<body>
<?php
include "../database/atas.php";
include "../database/koneksi.php";
  $keyword=$_POST['keyword'];
   echo " 
   <h2>Master Data Pelanggan</h2>
   <br>
                <form method='POST' action='siswa_cari.php'>
                    Kata pencarian: <input type='text' name='keyword'>
                    <input type='submit' value='Cari'>
                </form> 
   <table class='table' width=100% cellspacing=0 cellpadding=0>
    <tr>  
    <th class='th-sm' scope='col'>No</th>
    <th class='th-sm' scope='col'>ID Pelanggan</th>
    <th class='th-sm' scope='col'>Nama Pelanggan</th>
    <th class='th-sm' scope='col'>Nomor Telepon</th>
    <th class='th-sm' scope='col'>Jenis Kelamin</th>
    <th class='th-sm' scope='col'>Aksi</th>
    </tr>";  
       $tampil=mysqli_query($koneksi,"SELECT * FROM pelanggan where nama_pelanggan LIKE '%$keyword%' OR id_pelanggan LIKE '%$keyword%'"); 
       $no=1; 
        while ($r=mysqli_fetch_array($tampil)){  
             echo "  
            <tr>  
            <td>$no</td>
			<td>$r[id_pelanggan]</td>
			<td>$r[nama_pelanggan]</td>
			<td>$r[nomor_telepon]</td>
			<td>$r[jk]</td>
            <td align='center'>
                <a href='pelanggan_detail.php?id=$r[id_pelanggan]' class='fa fa-eye'></a> &nbsp;
                <a href='pelanggan_edit.php?id=$r[id_pelanggan]' class='fa fa-edit'></a> &nbsp;
                <a href='aksi_pelanggan_delete.php?id=$r[id_pelanggan]' class='fa fa-trash'></a>
            </td>
            </tr>"; 
              $no=$no+1;    
               } 
               echo "</table>";
                include "../database/bawah.php";
 ?>
</body>
</html> 