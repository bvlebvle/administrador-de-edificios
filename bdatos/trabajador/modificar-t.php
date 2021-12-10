<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$name = $_POST['name'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$rol = $_POST['rol'];
$remuneracion = $_POST['remuneracion'];
$rut = $_GET['rut'];

require_once '../conexion.php';
$sql = "UPDATE trabajador SET horario_entrada ='$entrada', horario_salida ='$salida', rol='$rol', remuneracion='$remuneracion', 
nombre='$name' WHERE rut='$rut'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-trabajadores"); 

?>

