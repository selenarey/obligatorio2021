<?php

$doc = $_POST["txtdoc"];
$pass = $_POST["txtpass"];


    require("../Modelo/conexion.php");

    

    $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$doc."' and password = '".$pass."'");
    $fila = mysqli_num_rows($query);


   if ($fila == true){

    header("Location: ../Controlador/prestamo.html");
  
}
else if ($fila== false)
{

    echo "<script>alert('No fue posible ingresar. Usuario o Contraseña Incorrecto');window.location='../Controlador/login.html';</script>";

}
?>

