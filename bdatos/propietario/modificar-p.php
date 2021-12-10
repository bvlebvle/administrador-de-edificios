<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$rut = $_GET['rut'];

require_once '../conexion.php';
$sql = "UPDATE propietario SET nombre ='$name', telefono ='$telefono' WHERE rut='$rut'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-propietarios"); 

?>

