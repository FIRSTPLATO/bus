<?php
	session_start();
	include 'dbconf.php';
	include 'lhast.php'; 
	if (!isset($_SESSION['login']))
		header('Location: login-ui.php');
	
	date_default_timezone_set('Asia/Jakarta');
	
	$id = $_GET['id'];
	
	$result = $mysqli->query("UPDATE `pesan` SET `status` = 'lunas' WHERE `pesan`.`id_pesan` = ".$id.";");
	
	header('Location: order.php');
?>