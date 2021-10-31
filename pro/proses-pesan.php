<?php
	session_start();
	include 'dbconf.php';
	include 'lhast.php'; 
	if (!isset($_SESSION['login']))
		header('Location: login-ui.php');
	
	date_default_timezone_set('Asia/Jakarta');
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$ktp = $_POST['ktp'];
	$tiket = $_POST['id'];
	$bayar = $_POST['bayar'];
	
	$result = $mysqli->query("INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_tiket`, `nama`, `alamat`, `ktp`, `bayar`, `status`, `bukti`) VALUES (NULL, '".$_SESSION['id_user']."', '".$tiket."', '".$nama."', '".$alamat."', '".$ktp."', '".$bayar."', 'belum lunas', '');");	

	if($bayar=="transfer")						
		header('Location: transfer.php');
	else
		header('Location: cop.php');
?>