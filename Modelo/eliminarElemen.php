<?php 

require ("../Modelo/conexion.php");

$ID =$_GET['id'];
$eliminar = "DELETE e, c FROM elemento AS e INNER JOIN computadora AS c ON c.ID_compu=e.ID WHERE e.ID= '$ID'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
    header('Location: ../Controlador/elementos.php');
}
?>