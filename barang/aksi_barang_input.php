<?php
include "../database/koneksi.php";

//ambil data yang dikirimkan form 
$id_barang = $_POST['id_barang'];
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

//rename foto dengan tanggal dan jam upload
$foto_barang = date('dmY').$foto;

// set path folder tempat menyimpan
$path = "../foto_barang/".$foto_barang;

//proses upload
if(move_uploaded_file($tmp, $path)){
    $query = "INSERT INTO barang VALUES(
        '".$id_barang."',
        '".$kd_barang."',
        '".$nama_barang."',
        '".$harga."',
        '".$foto_barang."')";
    $sql = mysqli_query($koneksi,$query);

if ($sql){
    header("location: barang.php");
}else {
    echo "Maaf Terjadi Kesalahan Saat Menyimpan Data Ke Database";
    header('location:barang.php');
}}

?>