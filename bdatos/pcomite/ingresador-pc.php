<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$rol = $_POST['rol'];
	$n_depto = $_POST['n_depto'];

	require_once '../conexion.php';
	$sql = "INSERT INTO pcomite(rut, nombre ,telefono, rol, n_depto) VALUES('$rut', '$nombre', $telefono, '$rol', $n_depto)";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-pcomite"); 


?>
