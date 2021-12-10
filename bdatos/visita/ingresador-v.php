<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$name = $_POST['name'];
	$n_depto = $_POST['n_depto'];
	$fecha = $_POST['fecha'];
	$telefono = $_POST['telefono'];
	$n_estacionamiento = $_POST['n_estacionamiento'];
	if ($_POST['n_estacionamiento'] == ""){
		$n_estacionamiento = 'NULL';
	}

	require_once '../conexion.php';
	$sql = "INSERT INTO visita(nombre, telefono, fecha, n_depto, n_estacionamiento) VALUES('$name', '$telefono','$fecha', $n_depto, $n_estacionamiento)";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-visita"); 


?>
