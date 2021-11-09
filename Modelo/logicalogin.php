<?php

$doc = $_POST["txtdoc"];
$pass = $_POST["txtpass"];


    require("../Modelo/conexion.php");

    

    $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE CI_lab = '".$doc."' and contraseña = '".$pass."'");
    $fila = mysqli_num_rows($query);

   if ($doc == $pass){
        session_start();
        $_SESSION['CI_lab']= $doc;
        header("Location: ../Controlador/editarContra.php");  
   }

    else if ($fila == true){
                session_start();
                $_SESSION['CI_lab']= $doc;
                header("Location: ../Controlador/inicio.php");
    }

    if ($fila== false){
    echo "<script>alert('No fue posible ingresar. Usuario o Contraseña Incorrecto');window.location='../login.php';</script>";
}

else if ($doc == '12345' AND $pass =='12345') {

    header("Location: ../Controlador/ventanaAdmin.php");
  
}
?>

