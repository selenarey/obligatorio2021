<?php 
    require ("../Modelo/conexion.php");
    
    $id= $_POST["id"];
    $tipo=$_POST["tipo"];
    $estado= $_POST["estado"];
    $desc= $_POST["desc"];

    $actualizar ="UPDATE elemento SET ID='$id', tipo='$tipo', estado='$estado', descripcion_estado='$desc' WHERE ID= $id";
    $resultado = mysqli_query($conectar, $actualizar);
    
    if($resultado== true){
        header('Location: ../Controlador/elementos.php');
    }
    else {
        echo "<script>alert('Error');window.location='../Controlador/editarElementos.php';</script>";
    }
?>