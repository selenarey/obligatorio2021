<?php 

require ("../Modelo/conexion.php");

$ID_elemento =$_GET['id'];
$eliminar = "DELETE FROM toma_prestado WHERE ID_elemento = '$ID_elemento'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
    header('Location: ../Controlador/inicio.php');
}
?>
