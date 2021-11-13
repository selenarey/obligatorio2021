<?php 

require ("../Modelo/conexion.php");

$ci_labo =$_GET['ci'];
$eliminar = "DELETE FROM laboratorista WHERE CI_lab = '$ci_labo'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado == true) {
    $eliminaru = "DELETE FROM usuario WHERE CI = '$ci_labo'";
    $resultadou = mysqli_query($conectar, $eliminaru);
    echo "<script>alert('Laboratorista eliminado con éxito');window.location='../Controlador/ventanaAdmin.php';</script>";
}

?>