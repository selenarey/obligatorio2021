<?php 

require ("../Modelo/conexion.php");

$ID =$_GET['id'];
$eliminar = "DELETE FROM elemento WHERE ID = '$ID'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
    header('Location: ../Controlador/elementos.php');
}

?>