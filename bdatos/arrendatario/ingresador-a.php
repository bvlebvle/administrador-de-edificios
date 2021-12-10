<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 

	$rut = $_POST['rut'];
	$name = $_POST['name'];
	$telefono = $_POST['telefono'];
	$n_depto = $_POST['n_depto'];
	$n_estacionamiento = $_POST['n_estacionamiento'];
	$n_bodega = $_POST['n_bodega'];

	if ($_POST['n_depto'] == "") {
		$n_depto = 'NULL';
	}
	if ($_POST['n_estacionamiento'] == ""){
		$n_estacionamiento = 'NULL';
	}
	if ($_POST['n_bodega']== "") {
		$n_bodega = 'NULL'; 
	}

	require_once '../conexion.php';
	
	$sql = "INSERT INTO arrendatario(rut,nombre,telefono,n_depto, n_bodega, n_estacionamiento) VALUES('$rut', '$name', '$telefono', $n_depto, $n_bodega, $n_estacionamiento)";
	
	$result = pg_query($connection, $sql);

	header("location: /perfil.php?page=ver-arrendatarios"); 


// ver valores null	
?>
