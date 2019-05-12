<?php include_once("koneksi.php");
$id= $_GET['id'];

$query="DELETE FROM bukutamu WHERE id=$id";
$hasil=mysqli_query($koneksi, $query);

if(!$hasil){
	echo "Gagal dihapus";
}else{
	echo "Berhasil Dihapus";
}

header("Location: tampil.php");


 ?>