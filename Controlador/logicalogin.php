<?php

$doc = $_POST["txtdoc"];
$pass = $_POST["txtpass"];


    require("conexion.php");

    

    $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$doc."' and password = '".$pass."'");
    $fila = mysqli_num_rows($query);


   if ($fila == 1){

    echo "hola";
  
}
else if ($fila==0)
{

    echo "<script>alert('No fue posible ingresar. Usuario o Contraseña Incorrecto');window.location='../login.html';</script>";

}
?>

