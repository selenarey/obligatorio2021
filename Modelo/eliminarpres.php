<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM toma_prestado WHERE ID_elemento => 0");

if ($eliminar) {
    header('Location: ../Controlador/inicio.php');
}
?>