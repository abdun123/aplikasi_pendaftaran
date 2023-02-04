<html>
<head>
	<title>tambah event</title>
</head>
<body>
	<h2>Selamat Datang Di Halaman Pendaftaran</h2>
	<hr>
	<fieldset>
		<legend>tambah event</legend>
		<form action="proses_tambah_event.php" method="POST">
			<table>
				<tr>
					<td>nama event:</td>
					<td><input type="text" name="nama" placeholder="masukkan event..." required></td>
				</tr>
				<tr>
					<td>tanggal event:</td>
					<td><input type="date" name="tanggal" title="masukkan tanggal..." required></td>
				</tr>
				<tr>
					<td>informasi event</td>
					<td><textarea name="informasi" style="width:645px; height:275px;" placeholder="masukkan informasi..." required></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
			</table>
	</fieldset>
	<br>
	<hr>
	<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>