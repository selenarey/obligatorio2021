<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM laboratorista WHERE CI_lab => 0");

if ($eliminar) {
    header('Location: ../Controlador/ventanaAdmin.php');
}
?>
