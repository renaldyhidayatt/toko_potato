<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Master Data Absensi</title>
</head>
<body>
	<!-- Halaman di dalam code PHP -->
</body>
</html>

<?php
include "../database/atas.php";
include "../database/koneksi.php";
  $keyword=$_POST['keyword'];
   echo " 
   <h2>Master Data Absensi</h2> 
   <table class='table' width=100% cellspacing=0 cellpadding=0>
    <tr>  
    <th class='th-sm' scope='col'>No</th>
		<th class='th-sm' scope='col'>ID Faktur</th>
		<th class='th-sm' scope='col'>Nomor Faktur</th>
		<th class='th-sm' scope='col'>qty</th>
		<th class='th-sm' scope='col'>kd barang</th>
		<th class='th-sm' scope='col'>id pelanggan</th>
		<th class='th-sm' scope='col'>Aksi</th>
    </tr>";  
       $tampil=mysqli_query($koneksi,"SELECT faktur.id_faktur,faktur.no_faktur,faktur.qty, barang.id_barang 
       FROM barang INNER JOIN faktur ON barang.kd_barang = faktur.kd_barang INNER JOIN pelanggan ON pelanggan.id_pelanggan = faktur.id_pelanggan
       where barang.kd_barang like '%$keyword%' OR pelanggan.id_pelanggan like '%$keyword%'"); 
       $no=1; 
        while ($r=mysqli_fetch_array($tampil)){  
             echo "  
            <tr>  
            <td>$no</td>
			<td>$r[id_faktur]</td>
			<td>$r[no_faktur]</td>
			<td>$r[qty]</td>
			<td>$r[kd_barang]</td>
			<td>$r[id_pelanggan]</td>
             
            <td align='center'>
                <a href='absensi_detail.php?id=$r[kd_absensi]'><img src=b_browse.png></a> &nbsp;
                
                <a href='aksi_absensi_delete.php?id=$r[kd_absensi]'><img src=b_drop.png></a>
            </td>
            </tr>"; 
              $no++;    
               } 
               echo "</table>";
               echo "<br>
                <form method='POST' action='absensi_cari.php'>
                    Kata pencarian: <input type='text' name='keyword'>
                    <input type='submit' value='Cari'>
                </form>";
                include "../database/bawah.php";
 ?> 