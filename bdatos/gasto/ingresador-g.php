<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$fecha = $_POST['fecha'];
	$monto = $_POST['monto'];

	require_once '../conexion.php';

	$sql = "INSERT INTO gastototal(fecha, monto) VALUES('$fecha', $monto)";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-gastos"); 


?>
