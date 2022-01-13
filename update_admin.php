<?php 
include "../admin/koneksi.php";

$ID_USER = $_POST['ID_USER'];
$NAMA = $_POST['NAMA'];
$ALAMAT  = $_POST['ALAMAT'];
$USERNAME  = $_POST['USERNAME'];

$sql = "UPDATE ADMIN SET NAMA='$NAMA', JK_ADMIN='$JK_ADMIN', ALAMAT='$ALAMAT', USERNAME='$USERNAME' WHERE ID_USER='$ID_USER'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
		header('location: admin.php?pesan=update');
	}
	else {echo "gagal";}
 ?>