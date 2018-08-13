<?php
include 'koneksi.php';
$No_RM=$_GET['No_RM'];
if(isset($_GET['No_RM'])){
	$del=mysql_query("DELETE FROM pasien WHERE no_rm='$No_RM'");
		if($del){
			header('location:index.php?rute=poliumum&stat=hapus');
		}else{
			echo 'Gagal';
		}
}
?>
