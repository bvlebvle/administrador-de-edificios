<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$n_estacionamiento = $_POST['n_estacionamiento'];
	$prorrateo = $_POST['prorrateo'];
	$rut_p = $_POST['rut_p'];


	require_once '../conexion.php';
	//n_depto, n_piso, prorrateo, rut
	$sql = "INSERT INTO estacionamiento(n_estacionamiento ,prorrateo , rut_p) VALUES($n_estacionamiento,  $prorrateo, '$rut_p')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-estacionamientos"); 


?>
