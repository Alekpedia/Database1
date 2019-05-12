<?php 
	include_once("koneksi.php");

	$id= $_GET['id'];

	$query=" SELECT * FROM bukutamu WHERE id='$id'";
	$hasil= mysqli_query ($koneksi,$query);

	$data= mysqli_fetch_assoc($hasil);
	$nama= $data ['nama'];
	$email= $data ['email'];
	$isi= $data ['isi'];


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
<form action="ubah.php" method="GET">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	<table>
		<tr>
			<td>Nama: </td>
			<td><input type="text" name="nama" value="<?php echo $data ['nama'];  ?>"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" value="<?php echo $data ['email']; ?>"></td>
		</tr>
		<tr>
			<td>Isi: </td>
			<td><textarea name="isi" cols="50" rows="5"><?php echo $data['isi']; ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"> <input type="reset" name="reset" value="CANCEL"></td>
		</tr>
	</table>
</form>
</body>
</html>