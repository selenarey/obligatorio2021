<?php

$doc = $_POST["txtdoc"];
$pass = $_POST["txtpass"];


    require("../Modelo/conexion.php");

    

    $query = mysqli_query($conectar,"SELECT CI_lab, contraseña, nombre FROM laboratorista AS l JOIN usuario as u ON l.CI_lab = u.CI WHERE CI_lab = '".$doc."' and contraseña = '".$pass."'");
    $fila = mysqli_num_rows($query);


   if ($fila == true){
    session_start();
    $_SESSION['nombre']= $nombre;
    header("Location: ../Controlador/inicio.php");
  
}
else if ($fila== false)
{
    echo "<script>alert('No fue posible ingresar. Usuario o Contraseña Incorrecto');window.location='../Controlador/login.php';</script>";
}
/*if ($doc = '12345' AND $pass ='12345') {

    header("Location: ../Controlador/ventanaAdmin.php");
  
}*/
?>

