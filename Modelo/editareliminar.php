<?php 
include ("../Modelo/conexion.php");


$id = $_POST["id"];
$eliminar = "DELETE FROM elemento WHERE id = '$id'";
$rta = mysqli_query($conectar, $eliminar);
if ($rta == true) {
    echo "<script>alert('Se ha eliminado el elemento correctamente');window.location='../Controlador/elementos.php';</script>";
} else {
    echo "<script>alert('Error');window.location='../Controlador/elementos.php';</script>";
}

?>