<?php
if(!isset($_GET['rute'])){
	include 'beranda.php';
}else{
	switch ($_GET['rute']) {
		case 'beranda':
			include 'beranda.php';
			break;
		case 'pasien':
			include 'pasien.php';
			break;
		case 'hematologi':
				include 'hematologi.php';
				break;
		case 'kimia':
			include 'kimia.php';
			break;
		case 'mikrobiologi':
			include 'mikrobiologi.php';
			break;
		case 'imunologi':
			include 'imunologi.php';
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
		case 'detail-kimia':
			include 'detail-kimia.php';
			break;
		case 'detail-mikrobiologi':
			include 'detail-mikrobiologi.php';
			break;
		case 'detail-imunologi':
			include 'detail-imunologi.php';
			break;
		default:
			include 'eror.php';
			break;
	}
}
?>
