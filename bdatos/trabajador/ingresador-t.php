<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$rut = $_POST['rut'];
	$name = $_POST['name'];
	$entrada = $_POST['entrada'];
	$salida = $_POST['salida'];
	$rol = $_POST['rol'];
	$remuneracion = $_POST['remuneracion'];

	require_once '../conexion.php';
	$sql = "INSERT INTO trabajador(rut, nombre ,horario_entrada, horario_salida, remuneracion, rol) VALUES('$rut', '$name', '$entrada', '$salida', $remuneracion, '$rol')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-trabajadores"); 


?>