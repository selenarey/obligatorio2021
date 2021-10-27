<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM usuario WHERE CI => 0");

if ($resultado) {
    header('Location: ../Controlador/usuarios.php');
}
?>