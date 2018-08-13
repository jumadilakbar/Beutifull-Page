<?php
include 'koneksi.php';
$id_periksa = $_POST['id_periksa'];
$no_rm = $_POST['no_rm'];
$no_lab = $_POST['no_lab'];
$dokter = $_POST['dokter'];
$tgl_periksa = $_POST['tgl_periksa'];
$atlm = $_POST['atlm'];
if ($_POST['leukosit']=='') {
  $_POST['leukosit']=0;
  $Byr_leukosit =0;
}
else if ($_POST['leukosit']!='') {
  $Byr_leukosit = 70000;
}
if ($_POST['eritrosit']=='') {
  $_POST['eritrosit']=0;
  $Byr_eritrosit =0;
}
else if ($_POST['eritrosit']!='') {
  $Byr_eritrosit = 70000;
}
if ($_POST['hemoglobin']=='') {
  $_POST['hemoglobin']=0;
  $Byr_hemoglobin = 0;
}
else if ($_POST['hemoglobin']!='') {
  $Byr_hemoglobin = 70000;
}
if ($_POST['hematokrit']=='') {
  $_POST['hematokrit']=0;
  $Byr_hematokrit =0;
}
else if ($_POST['hematokrit']!='') {
  $Byr_hematokrit = 105000;
}
if ($_POST['mcv']=='') {
  $_POST['mcv']=0;
  $Byr_mcv =0;
}
else if ($_POST['mcv']!='') {
  $Byr_mcv = 70000;
}
if ($_POST['mch']=='') {
  $_POST['mch']=0;
  $Byr_mch =0;
}
else if ($_POST['mch']!='') {
  $Byr_mch = 70000;
}
if ($_POST['mchc']=='') {
  $_POST['mchc']=0;
  $Byr_mchc = 0;
}
else if ($_POST['mchc']!='') {
  $Byr_mchc = 70000;
}
if ($_POST['leuokosit_B']=='') {
  $_POST['leuokosit_B']=0;
  $Byr_leuokosit_B = 0;
}
else if ($_POST['leuokosit_B']!='') {
  $Byr_leuokosit_B = 70000;
}
if ($_POST['eosinofil']=='') {
  $_POST['eosinofil']=0;
  $Byr_eosinofil = 0;
}
else if ($_POST['eosinofil']!='') {
  $Byr_eosinofil = 70000;
}
if ($_POST['batang']=='') {
  $_POST['batang']=0;
  $Byr_batang = 0;
}
else if ($_POST['batang']!='') {
  $Byr_batang = 70000;
}
if ($_POST['Segmen']=='') {
  $_POST['Segmen']=0;
  $Byr_Segmen = 0;
}
else if ($_POST['Segmen']!='') {
  $Byr_Segmen = 70000;
}
if ($_POST['limfosit']=='') {
  $_POST['limfosit']=0;
  $Byr_limfosit = 0;

}
else if ($_POST['limfosit']!='') {
  $Byr_limfosit = 70000;
}
if ($_POST['monosit']=='') {
  $_POST['monosit']=0;
  $Byr_monosit = 0;
}
else if ($_POST['monosit']!='') {
  $Byr_monosit = 70000;
}
// Hasil
$temp = $_POST['leukosit']."-".$_POST['eritrosit']."-".$_POST['hemoglobin']."-".$_POST['hematokrit']."-".$_POST['mcv']."-".$_POST['mch']."-".$_POST['mchc']."-".$_POST['leuokosit_B']."-".
$_POST['eosinofil']."-".$_POST['batang']."-".$_POST['Segmen']."-".$_POST['limfosit']."-".$_POST['monosit'];

//bayar
$bayar =$Byr_leukosit."-".$Byr_eritrosit."-".$Byr_hemoglobin."-".$Byr_hematokrit."-".$Byr_mcv."-".$Byr_mch."-".$Byr_mchc."-".$Byr_leuokosit_B."-".
$Byr_eosinofil."-".$Byr_batang."-".$Byr_Segmen."-".$Byr_limfosit."-".$Byr_monosit;
// echo $bayar;
// echo $temp;

$sql="INSERT INTO `hematologi`(`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`)
      VALUES ('$id_periksa','$no_rm','$no_lab','$dokter','$tgl_periksa','$atlm','$temp','$bayar')";
$query = mysql_query($sql);
if($query){
  header('location:index.php?rute=pasien&stat=berhasil');
}
 ?>
