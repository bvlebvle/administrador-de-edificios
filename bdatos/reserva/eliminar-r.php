<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	require_once '../conexion.php';
	
	$fecha = $_GET['fecha'];
	$n_depto = $_GET['n_depto'];
	$id = $_GET['id'];


	$sql="DELETE FROM reserva WHERE id_area = '$id' AND fecha = '$fecha' AND n_depto = '$n_depto'";

	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-reserva"); 
	
	?>