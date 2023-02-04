<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin
	</title>
</head>
<body>
		<p>Selamat Datang Di Halaman Admin | SMK Luqman Al Hakim Kudus
		<br>
		<form action="proses_admin.php" method="post">
		<fieldset>
			<legend>Admin</legend>

			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
				</tr>

				<tr>
					<td>Tanggal </td>
					<td>:</td>
					<td><input type="date" name="tanggal">
				</tr>
			
				<tr>
					<td>Informasi</td>
					<td>:</td>
					<td><textarea name="informasi" placeholder="Masukkan Alamat"></textarea></td>
				</tr>
				<td><input type="submit" value="Daftar"></td>
			</table>
		</fieldset>
	</form>
	<br>
	<br>
	<hr>
	<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>