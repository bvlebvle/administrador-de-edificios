<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];

	require_once '../conexion.php';
	$sql = "INSERT INTO padministracion(rut, nombre ,telefono, direccion) VALUES('$rut', '$nombre', '$telefono', '$direccion')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-administradores"); 


?>
