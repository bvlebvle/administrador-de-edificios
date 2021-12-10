<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$n_bodega = $_POST['n_bodega'];
	$prorrateo = $_POST['prorrateo'];
	$rut_p = $_POST['rut_p'];


	require_once '../conexion.php';
	
	$sql = "INSERT INTO bodega(n_bodega ,prorrateo , rut_p) VALUES($n_bodega,  $prorrateo, '$rut_p')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-bodegas"); 


?>
