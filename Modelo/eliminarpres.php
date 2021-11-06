<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "UPDATE toma_prestado SET fecha_devolucion= CURDATE()");

if ($eliminar) {
    header('Location: ../Controlador/inicio.php');
}
?>