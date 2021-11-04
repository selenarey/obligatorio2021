<?php 

require ("../Modelo/conexion.php");

$ci_labo =$_GET['ci'];
$eliminar = "DELETE FROM usuario WHERE CI = '$ci_labo'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado== true) {
    header('Location: ../Controlador/ventanaAdmin.php');
}

?>