<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM elemento WHERE ID => 0");

if ($resultado) {
    header('Location: ../Controlador/elementos.php');
}
?>
