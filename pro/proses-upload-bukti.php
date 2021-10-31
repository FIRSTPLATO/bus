<?php
	session_start();
	include 'dbconf.php';
	include 'lhast.php'; 
	if (!isset($_SESSION['login']))
		header('Location: login-ui.php');
	
	date_default_timezone_set('Asia/Jakarta');
	
	$id = $_GET['id'];
	
	$uploaddir = 'uploads/bukti/';
	$uploadfile = $uploaddir . basename($_FILES['bukti']['name']);
	move_uploaded_file($_FILES['bukti']['tmp_name'], $uploadfile);
	
	$result = $mysqli->query("UPDATE `pesan` SET `bukti` = '".$_FILES['bukti']['name']."' WHERE `pesan`.`id_pesan` = ".$id.";");
	
	header('Location: tiketku.php');
?>