<?php
	require_once '../conexion.php';
	
	$rut = $_GET['rut'];

	$sql="DELETE FROM propietario WHERE rut='$rut'";

	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-propietarios"); 
?>