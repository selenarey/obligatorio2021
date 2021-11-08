<?php 

require ("../Modelo/conexion.php");

$ID_elemento =$_GET['id'];
$eliminar = "UPDATE toma_prestado SET fecha_devolucion= CURDATE() WHERE ID_elemento = '$ID_elemento'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado == true) {
    $dispo = "UPDATE elemento SET disponibilidad = 'Si' WHERE ID = '$ID_elemento'";
    $resultadoup = mysqli_query($conectar, $dispo);
    header('Location: ../Controlador/inicio.php');
}
?>
