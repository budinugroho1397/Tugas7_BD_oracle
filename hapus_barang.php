<?php 
include "../admin/koneksi.php";

$KD_BARANG = $_GET['KD_BARANG'];
$sql="DELETE FROM BARANG WHERE KD_BARANG = '$KD_BARANG'";
$prepare = ociparse($koneksi, $sql);
ociexecute($prepare);
oci_commit($koneksi);
header("location: barang.php?pesan=hapus");
 ?>