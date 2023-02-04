<?php
// Tombol hapus di tekan
include "koneksi.php"
if(isset($_GET['hapus'])){
	$id=$_GET['id'];
	$hapus=mysqli_query($mysqli, "DELETE FROM Login WHERE id='$id'");
	if($hapus){
		header("localtion: tampil_login.php");
	}else{
		echo "<script>alert('maaf data tersebut masih terhubung dengan data yang lain');
		</script>";
	}
}
?>