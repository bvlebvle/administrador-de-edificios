<?php
	require_once '../conexion.php';
	
	$rut = $_GET['rut'];

	$sql="DELETE FROM padministracion WHERE rut='$rut'";

	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-administradores"); 