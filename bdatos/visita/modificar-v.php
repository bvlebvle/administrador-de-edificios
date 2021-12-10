<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 


$id = $_GET['id'];

$n_depto= $_POST['n_depto'];
$fecha= $_POST['fecha'];
$nombre= $_POST['nombre'];
$telefono= $_POST['telefono'];
$n_estacionamiento= $_POST['n_estacionamiento'];

if ($_POST['n_estacionamiento'] == ""){
	$n_estacionamiento = 'NULL';
}

require_once '../conexion.php';
$sql = "UPDATE visita SET n_depto=$n_depto, fecha='$fecha',n_estacionamiento=$n_estacionamiento,telefono='$telefono', nombre='$nombre' WHERE id = '$id'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-visita"); 

?>

