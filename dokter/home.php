<?php
if(!isset($_GET['rute'])){
	include 'beranda.php';
}else{
	switch ($_GET['rute']) {
		case 'beranda':
			include 'beranda.php';
			break;
		case 'pasien':
			// code...
			include 'pasien.php';
			break;
		case 'detail':
				include 'detail.php';
				break;
		case 'periksa':
			include 'periksa.php';
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
