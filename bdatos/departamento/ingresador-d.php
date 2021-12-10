<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$n_depto = $_POST['n_depto'];
	$n_piso = $_POST['n_piso'];
	$prorrateo = $_POST['prorrateo'];
	$rut_p = $_POST['rut_p'];


	require_once '../conexion.php';
	//n_depto, n_piso, prorrateo, rut
	$sql = "INSERT INTO departamento(n_depto, n_piso ,prorrateo , rut_p) VALUES($n_depto, $n_piso, $prorrateo, '$rut_p')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-departamentos"); 


?>
