<html>
<head>
	<title>Login</title>
</head>
<body style="background-image:url(b1.jpg); background-size: cover;">
	
	<p>Selamat Datang Di Halaman Login</p>
	<hr>
	<br>
	<form method="post" action="proses_login.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="Masukkan Username"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="Masukkan Password"></td>
				</tr>

				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>
			<br>
			<a href="pendaftaran.php">Belum Punya Akun...</a>
		</fieldset>

	</form>
	<br>
	<br>
	<hr>
	<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>