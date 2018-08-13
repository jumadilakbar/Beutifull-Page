<?php
include 'koneksi.php';
$No_RM=$_POST['No_RM'];
$tempatlahir=$_POST['tempatlahir'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$tanggallahir=$_POST['tanggallahir'];
echo $tanggallahir;
$no_telepon=$_POST['no_telepon'];
$sql="INSERT INTO `pasien`(`no_rm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `usia`, `jk`, `alamat`, `no_hp`)
VALUES ('$No_RM','$nama','$tempatlahir','$tanggallahir','$usia','$jk','$alamat','$no_telepon')";
$input=mysql_query($sql);
	if($input){
		header('location:index.php?rute=poliumum&stat=berhasil');	
		// echo "berhasil";
	}
  else {
    echo "gagal";
  }

 ?>
