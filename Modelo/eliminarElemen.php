<?php 

require ("../Modelo/conexion.php");

$ID =$_GET['id'];
$eliminar = "DELETE FROM elemento WHERE ID = '$ID'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado == true) {
    $eliminarcompu = "DELETE FROM computadora WHERE ID_compu = '$ID'";
    $resultadoc = mysqli_query($conectar, $eliminarcompu);
    if ($resultadoc){
        echo "<script>alert('BUENAS');window.location='../Controlador/elementos.php';</script>";
    }
}
?>