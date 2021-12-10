<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	
	$name = $_POST['name'];

	require_once '../conexion.php';
	
	$sql = "INSERT INTO areacomun(nombre) VALUES('$name')";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-area"); 


// ver valores null	
?>
