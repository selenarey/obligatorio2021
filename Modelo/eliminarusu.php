<?php 
    include ("../Modelo/conexion.php");

$eliminar= mysqli_query($conectar, "TRUNCATE TABLE usuario");


?>