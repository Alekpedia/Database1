<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
<form action="simpan.php" method="GET">
	<table>
		<tr>
			<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Isi:</td>
			<td><textarea name="isi" cols="50" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="SUBMIT"> <input type="Reset" Value="CANCEL">
			</td>
		</tr>
	</table>
</form>
</body>
</html>