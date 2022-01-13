<?php 
include "../admin/koneksi.php"; 

$NAMA_BARANG = $_POST['NAMA_BARANG'];
$UNIT    	 = $_POST['UNIT'];
$QTY    	 = $_POST['QTY'];
$HARGA    	 = $_POST['HARGA'];


$sql="INSERT INTO BARANG VALUES ('','$NAMA_BARANG','$UNIT','$QTY','$HARGA')";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:barang.php?pesan=input');
	}
	else {echo "gagal";}



 ?>