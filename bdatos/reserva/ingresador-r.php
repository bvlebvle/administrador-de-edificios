<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$id = $_POST['id'];
	$n_depto = $_POST['n_depto'];
	$fecha = $_POST['fecha'];

	require_once '../conexion.php';
	$sql = "INSERT INTO reserva(id_area, n_depto, fecha) VALUES('$id', '$n_depto', '$fecha')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-reserva"); 


?>
