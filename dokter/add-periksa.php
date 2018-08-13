<?php
include 'koneksi.php';
$no_rm = $_POST['no_rm'];
$id_user = $_POST['id_user'];
$TD = $_POST['tekanandrh'];
$BB= $_POST['berat_badan'];
$rujuk = $_POST['rujuk'];
$catatan = $_POST['catatan'];
$diagnosa = $_POST['diagnosa'];
$keluhan = $_POST['keluhan'];
$JP=$_POST['JP'];
if($JP!='' && $rujuk=='Ya'){
  $temp=implode(',',$JP);
}
else {
  $temp= " Tidak Di Lakukan Pemeriksaan ";
}
$sql = "INSERT INTO `periksa`(`no_rm`, `id_user`, `tekanan_darah`, `berat_badan`, `rujuk`, `catatan`, `diagnosa`, `keluhan`, `jenis_periksa`)
        VALUES ('$no_rm','$id_user','$TD','$BB','$rujuk','$catatan','$diagnosa','keluhan','$temp')";
$query = mysql_query($sql);
if($query){
  header('location:index.php?rute=pasien&stat=berhasil');
}

 ?>
