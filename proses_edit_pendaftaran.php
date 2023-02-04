<?php

   include "koneksi.php";
   $id =$_GET['id'];
   $nama =$_GET['nama'];
   $email =$_GET['email'];
   $tanggal_lahir =$_GET['tanggal_lahir'];
   $alamat =$_GET['alamat'];

           mysqli_query($mysqli, "update pendaftaran set id='$id', nama='$nama', email='$email', tanggal_lahir='$tanggal_lahir',alamat='$alamat' where id='$id' ");
           header("location: tampil_pendaftaran.php");

?>