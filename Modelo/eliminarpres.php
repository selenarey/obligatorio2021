<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM prestamos WHERE id_elemento > 0");

if ($eliminar == true) {
    echo "<script>alert('Se han eliminado todos los préstamos correctamente');window.location='../Controlador/inicio.php';</script>";
}
else {
    echo "<script>alert('Error');window.location='../Controlador/inicio.php';</script>";
}
?>