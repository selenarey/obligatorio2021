<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM elemento WHERE id > 0");

if ($eliminar == true) {
    echo "<script>alert('Se han eliminado todos los elementos correctamente');window.location='../Controlador/elementos.php';</script>";
}
else {
    echo "<script>alert('Error');window.location='../Controlador/elementos.php';</script>";
}
?>