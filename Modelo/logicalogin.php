<?php

$doc = $_POST["txtdoc"];
$pass = $_POST["txtpass"];


    require("conexion.php");

    

    $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$doc."' and password = '".$pass."'");
    $fila = mysqli_num_rows($query);


   if ($fila == true){

    header("Location: ../Modelo/prestamo.html");
  
}
else if ($fila== false)
{

    echo "<script>alert('No fue posible ingresar. Usuario o Contraseña Incorrecto');window.location='../Modelo/login.html';</script>";

}
?>

