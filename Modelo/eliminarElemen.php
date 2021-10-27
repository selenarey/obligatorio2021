<?php 

include ("../Modelo/conexion.php");
include ("../Controlador/elementos.php");

if (isset($_GET['borrar'])){
$borrar_id = $_GET['borrar'];
$borrar = "DELETE FROM elemento WHERE ID = '$borrar_id'";
$ejecutar = mysqli_query($conectar, $borrar);

if ($ejecutar){
    echo "<script>alert('buena');window.location='../Controlador/elementos.php';</script>";

}
else {
    echo "<script>alert('Error');window.location='../Controlador/elementos.php';</script>";

}
}


?>