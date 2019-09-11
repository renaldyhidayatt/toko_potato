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
   <h2>Master Data Siswa</h2>
   <br>
                <form method='POST' action='siswa_cari.php'>
                    Kata pencarian: <input type='text' name='keyword'>
                    <input type='submit' value='Cari'>
                </form> 
   <table border=1 width=100% cellspacing=0 cellpadding=0>
    <tr>  
     <th>No</th>
     <th>id_barang</th>
     <th>Kode Barang</th>
     <th>Nama Barang</th>
     <th>Harga</th>
     <th>Foto</th>
     <th>Aksi</th>
    </tr>";  
       $tampil=mysqli_query($koneksi,"SELECT * FROM barang where nama_barang LIKE '%$keyword%' OR id_barang LIKE '%$keyword%'"); 
       $no=1; 
        while ($r=mysqli_fetch_array($tampil)){  
             echo "  
            <tr>  
            <td>$no</td>
			<td>$r[id_barang]</td>
			<td>$r[kd_barang]</td>
			<td>$r[nama_barang]</td>
			<td>$r[harga]</td>
            <td>$r[foto]</td>   
             
            <td align='center'>
                <a href='barang_detail.php?id=$r[id_barang]'><img src=b_browse.png></a> &nbsp;
                <a href='barang_edit.php?id=$r[id_barang]'><img src=b_edit.png></a> &nbsp;
                <a href='aksi_barang_delete.php?id=$r[id_barang]'><img src=b_drop.png></a>
            </td>
            </tr>"; 
              $no=$no+1;    
               } 
               echo "</table>";
                include "../database/bawah.php";
 ?>
</body>
</html> 