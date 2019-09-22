<?php 

	session_start();
	$_SESSION = [];
	session_unset();
	session_destroy();
	// LOCASI
	header("Location:../index.php");
	exit;
?>