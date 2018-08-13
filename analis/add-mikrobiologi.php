<?php
include 'koneksi.php';
$id_periksa = $_POST['id_periksa'];
$no_rm = $_POST['no_rm'];
$no_lab = $_POST['no_lab'];
$dokter = $_POST['dokter'];
$tgl_periksa = $_POST['tgl_periksa'];
$atlm = $_POST['atlm'];
// echo $atlm;
if($_POST['BTA']==""){
  $_POST['BTA']=0;
  $Byr_a=0;

} else if($_POST['BTA']!=""){
  $Byr_a=200000;
}
if($_POST['ISK']==""){
  $_POST['ISK']=0;
  $Byr_b=0;

} else if($_POST['ISK']!=""){
  $Byr_b=170000;
}
$temp = $_POST['BTA']."-".$_POST['ISK'];
$bayar= $Byr_a."-".$Byr_b;
$sql="INSERT INTO `mikrobiologi`(`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`)
      VALUES ('$id_periksa','$no_rm','$no_lab','$dokter','$tgl_periksa','$atlm','$temp','$bayar')";
$query = mysql_query($sql);
if($query){
  header('location:index.php?rute=pasien&stat=berhasil');
}
 ?>
