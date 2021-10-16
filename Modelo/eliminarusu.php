<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "DELETE FROM usuario WHERE CI > 0");

if ($eliminar == true) {
    echo "<script>alert('Se han eliminado todos los usuarios correctamente');window.location='../Controlador/usuarios.php';</script>";
}
else {
    echo "<script>alert('Error');window.location='../Controlador/usuarios.php';</script>";
}
?>