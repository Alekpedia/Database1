<!DOCTYPE html>
<html>
<head>
	<title>Simpan</title>
</head>
<body>
<?php 
include_once('koneksi.php');

	$nama= $_GET['nama'];
	$email=$_GET['email'];
	$isi=$_GET['isi'];

	$query="INSERT INTO bukutamu (nama,email,isi) VALUES ('$nama','$email','$isi')";
	$hasil=mysqli_query($koneksi,$query);

	if(!hasil)
		die ("Penyimpanan Gagal!!!");

	header("Location: tampil.php");
 ?>
</body>
</html>