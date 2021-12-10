<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$name = $_POST['nombre'];
$telefono = $_POST['telefono'];
$n_depto = $_POST['n_depto'];
$rol = $_POST['rol'];
$rut = $_GET['rut'];

require_once '../conexion.php';
$sql = "UPDATE pcomite SET nombre ='$name', telefono ='$telefono', n_depto = '$n_depto', rol = '$rol'WHERE rut='$rut'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-pcomite"); 

?>

