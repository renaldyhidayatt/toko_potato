<?php
include "../database/koneksi.php";
header ("location:absensi.php");
mysqli_query($koneksi,"DELETE FROM faktur WHERE id_faktur='$_GET[id]'");
?>