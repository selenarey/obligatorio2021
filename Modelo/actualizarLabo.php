<?php 
    require ("../Modelo/conexion.php");
    
    $ci_lab= $_POST["ci"];
    $contraseña=$_POST["contraseña"];

    $actualizar ="UPDATE laboratorista SET CI_lab='$ci_lab', contraseña='$contraseña' WHERE CI_lab= $ci_lab";
    $resultado = mysqli_query($conectar, $actualizar);
    
    if($resultado== true){
        header('Location: ../Controlador/ventanaAdmin.php');
    }

?>