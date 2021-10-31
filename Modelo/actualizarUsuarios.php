<?php 
    require ("../Modelo/conexion.php");
    
    $ci= $_POST["txtci"];
    $nombre=$_POST["txtnombre"];
    $apellido= $_POST["txtape"];
    $grupo= $_POST["txtgrupo"];
    $telefono= $_POST["telefono"];

    $actualizar ="UPDATE usuario SET CI='$ci', nombre='$nombre', apellido='$apellido', grupo='$grupo', telefono='$telefono' WHERE CI= $ci";
    $resultado = mysqli_query($conectar, $actualizar);
    
    if($resultado== true){
        header('Location: ../Controlador/usuarios.php');
    }

?>