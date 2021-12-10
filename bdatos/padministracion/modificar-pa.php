<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$name = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$rut = $_GET['rut'];

require_once '../conexion.php';
$sql = "UPDATE padministracion SET nombre ='$name', telefono ='$telefono', direccion ='$direccion' WHERE rut='$rut'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-administradores"); 

?>

