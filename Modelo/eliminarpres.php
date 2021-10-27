<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM toma_prestado WHERE ID_elemento => 0");

if ($resultado) {
    header('Location: ../Controlador/inicio.php');
}
?>