<?php

include "koneksi.php";

?>
<h2>DATA ADMIN</h2>
<hr>
<a href="tampil_pendaftaran.php">Pendaftaran</a> | <a href="tampil_admin.php">Admin</a> | <a href="tampil_login.php">Login</a>
<br>
<hr>
<a href="admin.php">+ TAMBAH ADMIN</a>
<br>
<table border="1">
	<tr>
		<td>Nomer</td>
		<td>Nama</td>
		<td>Tanggal</td>
		<td>Informasi</td>
		<td>Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from admin");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['tanggal']; ?></td>
		<td><?php echo $hasil['informasi']; ?></td>
		<td>
			<a href="edit_admin.php?id=<?php echo $hasil['id']; ?>">edit</a>
			<a href="hapus_admin.php?hapus&id=<?php echo $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
