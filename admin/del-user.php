<?php
include 'koneksi.php';
$id_user=$_GET['id_user'];
$del=mysql_query("DELETE FROM user WHERE id_user='$id_user'");
		if($del){
			header('location:index.php?rute=user&stat=hapus');
		}else{
			echo 'Gagal';
		}
?>
