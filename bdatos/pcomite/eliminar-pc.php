<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	require_once '../conexion.php';
	
	$rut = $_GET['rut'];

	$sql="DELETE FROM pcomite WHERE rut='$rut'";

	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-pcomite"); 
	
	?>