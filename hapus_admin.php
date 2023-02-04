<?php
// Tombol Hapus ditekan
include "koneksi.php";
if(isset($_GET['hapus'])){
	$id= $_GET['id'];
	$hapus= mysqli_query($mysqli, "DELETE FROM ADMIN WHERE id ='$id'");
	if($hapus){
		header("location: tampil_admin.php");
      }else{
      	echo "<script>alert('maaf data tersebut masih terhubung data yang lain');
      	</script>";
      }
  }
?>