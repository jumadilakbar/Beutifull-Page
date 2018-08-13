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
$sql="UPDATE `pasien` SET `nama`='$nama',`tempat_lahir`='$tempatlahir',`tanggal_lahir`='$tanggallahir',
      `usia`='$usia',`jk`='$jk',`alamat`='$alamat',`no_hp`='$no_telepon' WHERE no_rm='$No_RM' ";
$input=mysql_query($sql);
	if($input){
		header('location:index.php?rute=poliumum&stat=edit');
	}
  else {
    echo "gagal";
  }

 ?>
