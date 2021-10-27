<?php 

require ("../Modelo/conexion.php");

$CI =$_GET['id'];
$eliminar = "DELETE FROM usuario WHERE CI = '$CI'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
    header('Location: ../Controlador/usuarios.php');
}
?>