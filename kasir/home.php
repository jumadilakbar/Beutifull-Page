<?php
if(!isset($_GET['rute'])){
	include 'beranda.php';
}else{
	switch ($_GET['rute']) {
		case 'beranda':
			include 'beranda.php';
			break;
		case 'rekap':
			include 'rekap.php';
			break;
		case 'detail-rekap':
			include 'detail-rekap.php';
			break;
		default:
			include 'eror.php';
			break;
	}
}
?>
