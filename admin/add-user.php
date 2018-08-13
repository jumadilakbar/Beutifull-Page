<?php
include 'koneksi.php';
$nama_lengkap=$_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
echo $nama_lengkap;
$sql = "INSERT INTO `user`(`username`, `password`, `nama_lengkap`, `level`) VALUES ('$username','$password','$nama_lengkap','$level')";
$input=mysql_query($sql);
	if($input){
		header('location:index.php?rute=user&stat=berhasil');
		// echo "berhasil";
	}
  else {
    echo "gagal";
  }

 ?>
