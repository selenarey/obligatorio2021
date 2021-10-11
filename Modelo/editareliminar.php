<?php 
include ("conexion.php");


$id = $_GET['id'];
$eliminar = "DELETE FROM elemento WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conectar, $eliminar);

?>