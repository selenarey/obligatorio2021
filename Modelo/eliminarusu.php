<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM usuario WHERE CI => 0");

if ($eliminar) {
    header('Location: ../Controlador/usuarios.php');
}
?>