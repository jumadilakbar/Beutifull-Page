<?php
if(!isset($_GET['rute'])){
	include 'beranda.php';
}else{
	switch ($_GET['rute']) {
		case 'user':
			include 'user.php';
			break;
		case 'edit-pasien':
			include 'form-edit-pasien.php';
			break;
		case 'beranda':
			include 'beranda.php';
			break;
		case 'registrasi':
			include 'registrasi.php';
			break;
		case 'poliumum':
			include 'poliumum.php';
			break;
			case 'laboratorium':
				include 'laboratorium.php';
				break;
		case 'detail':
			include 'detail.php';
			break;
		case 'tambah-user':
			include 'form-user.php';
			break;
		default:
			include 'eror.php';
			break;
	}
}
?>
