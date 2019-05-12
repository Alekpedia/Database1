<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tampil</title>
</head>
<body>
	<table border="1">
		<thead>
			<th>NAMA</th><th>EMAIL</th><th>ISI</th>
		</thead>
		<tbody>
			<?php 
				include_once("koneksi.php");

				$query=" SELECT * FROM bukutamu";
				$hasil= mysqli_query($koneksi,$query);

				if(!$hasil)
					die("Permintaan Gagal..!!!");

					while($data= mysqli_fetch_assoc($hasil))
					{
						?>
						<tr>
							<td>
								<a href="bukutamu_ubah_form.php?id=<?php echo $data ['id']; ?>">
									<?php echo $data ['nama']; ?>
								</a>
							</td>
							<td><?php echo $data ['email']; ?></td>
							<td><?php echo $data['isi']; ?></td>
							<td><a href="hapus.php?id=<?php echo $data ['id']; ?>">Hapus</a></td>
						</tr>
						<?php 


					}
			 ?>
		</tbody>
	</table>

</body>
</html>