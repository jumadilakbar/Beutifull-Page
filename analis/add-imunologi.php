<?php
include 'koneksi.php';
$id_periksa = $_POST['id_periksa'];
$no_rm = $_POST['no_rm'];
$no_lab = $_POST['no_lab'];
$dokter = $_POST['dokter'];
$tgl_periksa = $_POST['tgl_periksa'];
$atlm = $_POST['atlm'];
if (!isset($_POST['a'])) {
   $_POST['THA'] = 0;
   $Byr_a =0;
} else if ($_POST['a']!="") {
   $Byr_a =255000;
}
if (!isset($_POST['b'])) {
   $_POST['TOA'] = 0;
   $Byr_b =0;

} else if ($_POST['b']!="") {
   $Byr_b =255000;
}
if (!isset($_POST['c'])) {
   $_POST['PAOA'] = 0;
   $Byr_c =0;

} else if ($_POST['c']!="") {
   $Byr_c =255000;
}
if (!isset($_POST['d'])) {
   $_POST['PBOA'] = 0;
   $Byr_d =0;

} else if ($_POST['d']!="") {
   $Byr_d =255000;
}
if (!isset($_POST['e'])) {
   $_POST['tes_hamil'] = 0;
   $Byr_e =0;

} else if ($_POST['e']!="") {
   $Byr_e =340000;
}
if (!isset($_POST['f'])) {
   $_POST['GolDar'] = 0;
   $Byr_f =0;

} else if ($_POST['f']!="") {
   $Byr_f =80000;
}
if (!isset($_POST['g'])) {
   $_POST['HBsAg'] = 0;
   $Byr_g =0;

} else if ($_POST['g']!="") {
   $Byr_g =150000;
}
if (!isset($_POST['h'])) {
   $_POST['DFIM'] = 0;
   $Byr_h =0;

} else if ($_POST['h']!="") {
   $Byr_h =340000;
}
if (!isset($_POST['i'])) {
   $_POST['DFIG'] = 0;
   $Byr_i =0;

} else if ($_POST['i']!="") {
   $Byr_i =340000;
}
if (!isset($_POST['j'])) {
   $_POST['HIV'] = 0;
   $Byr_j =0;

} else if ($_POST['j']!="") {
   $Byr_j =350000;
}
if (!isset($_POST['k'])) {
   $_POST['TIG'] = 0;
   $Byr_k =0;

} else if ($_POST['k']!="") {
   $Byr_k =245000;
}
if (!isset($_POST['l'])) {
   $_POST['TIM'] = 0;
   $Byr_l =0;

} else if ($_POST['l']!="") {
   $Byr_l =245000;
}
if (!isset($_POST['m'])) {
   $_POST['RIG'] = 0;
   $Byr_m =0;

} else if ($_POST['m']!="") {
   $Byr_m =250000;
}
if (!isset($_POST['n'])) {
   $_POST['RIM'] = 0;
   $Byr_n =0;

} else if ($_POST['n']!="") {
   $Byr_n =330000;
}
if (!isset($_POST['o'])) {
   $_POST['CMV_IgG'] = 0;
   $Byr_o =0;

} else if ($_POST['o']!="") {
   $Byr_o =340000;
}
if (!isset($_POST['p'])) {
   $_POST['CMV_IgM'] = 0;
   $Byr_p =0;

} else if ($_POST['p']!="") {
   $Byr_p =250000;
}
//Hasil
$temp = $_POST['THA']."-".$_POST['TOA']."-".$_POST['PAOA']."-".$_POST['PBOA']."-".$_POST['tes_hamil']."-".$_POST['GolDar']."-".$_POST['HBsAg']."-".$_POST['DFIM']."-".
$_POST['DFIG']."-".$_POST['HIV']."-".$_POST['TIG']."-".$_POST['TIM']."-".$_POST['RIG']."-".$_POST['RIM']."-".$_POST['CMV_IgG']."-".$_POST['CMV_IgM'];

//$bayar
$bayar = $Byr_a."-".$Byr_b."-".$Byr_c."-".$Byr_d."-".$Byr_e."-".$Byr_f."-".$Byr_g."-".$Byr_h."-".
$Byr_i."-".$Byr_j."-".$Byr_k."-".$Byr_l."-".$Byr_m."-".$Byr_n."-".$Byr_o."-".$Byr_p;

// echo $bayar;
// echo $temp;

$sql="INSERT INTO `imunologi`(`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`)
      VALUES ('$id_periksa','$no_rm','$no_lab','$dokter','$tgl_periksa','$atlm','$temp','$bayar')";
$query = mysql_query($sql);
if($query){
  header('location:index.php?rute=pasien&stat=berhasil');
}
 ?>
