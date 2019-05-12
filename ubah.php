<?php 
include_once("koneksi.php");

$id= $_GET['id'];
$nama= $_GET['nama'];
$email=$_GET['email'];
$isi=$_GET['isi'];

$query="UPDATE bukutamu SET nama='$nama',email='$email',isi='$isi' WHERE id=$id";
$hasil= mysqli_query($koneksi,$query);

if(!$hasil)
	die("Gagal Mengubah Data");

header("Location: tampil.php");
 ?>