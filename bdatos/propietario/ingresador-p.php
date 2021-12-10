<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$rut = $_POST['rut'];
	$name = $_POST['name'];
	$telefono = $_POST['telefono'];

	require_once '../conexion.php';
	$sql = "INSERT INTO propietario(rut, nombre ,telefono) VALUES('$rut', '$name', '$telefono')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-propietarios"); 


?>
