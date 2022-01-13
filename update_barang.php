<?php 
include "../admin/koneksi.php";

$KD_BARANG   = $_POST['KD_BARANG'];
$UNIT        = $_POST['UNIT'];
$QTY         = $_POST['QTY'];
$HARGA       = $_POST['HARGA'];

$sql = "UPDATE BARANG SET UNIT='$UNIT', QTY='$QTY', HARGA='$HARGA' WHERE KD_BARANG='$KD_BARANG'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: barang.php?pesan=update');
	}
	else {echo "gagal";}
 ?>