<?php 
    require ("../Modelo/conexion.php");
    $contra= $_POST["contra"];
    $doc= $_POST["txtdoc"];

    $actualizar ="UPDATE laboratorista SET contraseña='$contra', CI_lab='$doc' WHERE CI_lab= '$doc'";
    $resultado = mysqli_query($conectar, $actualizar);
    
    if($resultado== true){
        header('Location: ../Controlador/inicio.php');
    }
    else {
        echo "<script>alert('Error');window.location='../Controlador/editarContra.php';</script>";
    }

?>