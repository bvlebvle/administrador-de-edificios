<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 


$id = $_GET['id'];
$n_depto = $_GET['n_depto'];
$fecha = $_GET['fecha'];

$idp= $_POST['id'];
$n_deptop= $_POST['n_depto'];
$fechap= $_POST['fecha'];

require_once '../conexion.php';
$sql = "UPDATE reserva SET id_area ='$idp', n_depto ='$n_deptop', fecha = '$fechap' WHERE id_area = '$id' AND fecha = '$fecha' AND n_depto = '$n_depto'"; 

$result = pg_query($connection, $sql);

header("location: /perfil.php?page=ver-reserva"); 

?>

