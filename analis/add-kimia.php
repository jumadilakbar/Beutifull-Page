<?php
include 'koneksi.php';
$id_periksa = $_POST['id_periksa'];
$no_rm = $_POST['no_rm'];
$no_lab = $_POST['no_lab'];
$dokter = $_POST['dokter'];
$tgl_periksa = $_POST['tgl_periksa'];
$atlm = $_POST['atlm'];
// echo $atlm;
if($_POST['KT']==""){
  $_POST['KT'] = 0;
  $Byr_KT= 0;
}else if($_POST['KT']!=""){
  $Byr_KT= 40000;
}
if($_POST['asam_urat']==""){
  $_POST['asam_urat'] = 0;
  $Byr_AU= 0;
}else if($_POST['asam_urat']!=""){
  $Byr_AU= 37000;
}
if($_POST['trigliserida']==""){
  $_POST['trigliserida'] = 0;
    $Byr_trigliserida= 0;
}else if($_POST['trigliserida']!=""){
  $Byr_trigliserida= 40000;
}
if($_POST['hdl']==""){
  $_POST['hdl'] = 0;
  $Byr_hdl= 0;

}else if($_POST['hdl']!=""){
  $Byr_hdl= 50000;
}
if($_POST['ldl']==""){
  $_POST['ldl'] = 0;
  $Byr_ldl= 0;

}else if($_POST['ldl']!=""){
  $Byr_ldl= 47000;
}
if($_POST['GDPP']==""){
  $_POST['GDPP'] = 0;
  $Byr_GDPP= 0;

}else if($_POST['GDPP']!=""){
  $Byr_GDPP= 23000;
}

if($_POST['sgot']==""){
  $_POST['sgot'] = 0;
  $Byr_sgot= 0;

}else if($_POST['sgot']!=""){
  $Byr_sgot= 35000;
}
if($_POST['sgpt']==""){
  $_POST['sgpt'] = 0;
  $Byr_sgpt= 0;

}else if($_POST['sgpt']!=""){
  $Byr_sgpt= 35000;
}
if($_POST['WU']==""){
  $_POST['WU'] = 0;
  $Byr_WU= 0;

}else if($_POST['WU']!=""){
  $Byr_WU= 35000;
}
if($_POST['KU']==""){
  $_POST['KU'] = 0;
  $Byr_KU= 0;

}else if($_POST['KU']!=""){
  $Byr_KU= 35000;
}
if($_POST['BU']==""){
  $_POST['BU'] = 0;
  $Byr_BU= 0;

}else if($_POST['BU']!=""){
  $Byr_BU= 35000;
}
if($_POST['pHU']==""){
  $_POST['pHU'] = 0;
  $Byr_pHU= 0;

}else if($_POST['pHU']!=""){
  $Byr_pHU= 35000;
}
if($_POST['PU']==""){
  $_POST['PU'] = 0;
  $Byr_PU= 0;

}else if($_POST['PU']!=""){
  $Byr_PU= 35000;
}
if($_POST['GU']==""){
  $_POST['GU'] = 0;
  $Byr_GU= 0;

}else if($_POST['GU']!=""){
  $Byr_GU= 35000;
}
if($_POST['urobilinogen']==""){
  $_POST['urobilinogen'] = 0;
  $Byr_urobilinogen= 0;

}else if($_POST['urobilinogen']!=""){
  $Byr_urobilinogen= 50000;
}
if($_POST['sedimen_urine']==""){
  $_POST['sedimen_urine'] = 0;
  $Byr_sedimen_urine= 0;

}else if($_POST['sedimen_urine']!=""){
  $Byr_sedimen_urine= 33000;
}

$temp = $_POST['KT']."-".$_POST['asam_urat']."-".$_POST['trigliserida']."-".$_POST['hdl']."-".$_POST['ldl']."-".$_POST['GDPP']."-".$_POST['sgot']."-".$_POST['sgpt']."-".
$_POST['WU']."-".$_POST['KU']."-".$_POST['BU']."-".$_POST['pHU']."-".$_POST['PU']."-".$_POST['GU']."-".$_POST['urobilinogen']."-".$_POST['sedimen_urine'];

//bayar
$bayar = $Byr_KT."-".$Byr_AU."-".$Byr_trigliserida."-".$Byr_hdl."-".$Byr_ldl."-".$Byr_GDPP."-".$Byr_sgot."-".$Byr_sgpt."-".
$Byr_WU."-".$Byr_KU."-".$Byr_BU."-".$Byr_pHU."-".$Byr_PU."-".$Byr_GU."-".$Byr_urobilinogen."-".$Byr_sedimen_urine;

echo $bayar;
echo $temp;

$sql="INSERT INTO `kimia`(`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`)
      VALUES ('$id_periksa','$no_rm','$no_lab','$dokter','$tgl_periksa','$atlm','$temp','$bayar')";
$query = mysql_query($sql);
if($query){
  header('location:index.php?rute=pasien&stat=berhasil');
}
 ?>
