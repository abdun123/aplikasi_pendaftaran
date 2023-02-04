<?php

include "koneksi.php";

?>
<h2>DATA LOGIN</h2>
<hr>
<a href="tampil_pendaftaran.php">Pendaftaran</a> | <a href="tampil_admin.php">Admin</a> | <a href="tampil_login.php">Login</a>
<br>
<hr>
<a href="login.php"></a>
<br>
<body style="background-image:url(c2.jpg); background-size: cover;">
<table border="1">
	<tr>
		<td>Nomer</td>
		<td>Username</td>
		<td>Passowrd</td>
		<td>Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from login");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['username']; ?></td>
		<td><?php echo $hasil['password']; ?></td>
		<td>
			<a href="edit_login.php?id=<?php echo $hasil['id']; ?>">edit</a>
			<a href="hapus_login.php?hapus&id=<?php echo $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
