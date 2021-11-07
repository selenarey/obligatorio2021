<?php 
    include "../Modelo/conexion.php";

    
 if (isset ($_POST ["aa"])){
 $cedula = $_POST["txtci"];
 $id_elemento = $_POST["idele"];
 $fecha = $_POST["fecha"];
 $hora = $_POST["hora"];
 $plazo= $_POST ["plazo"];
 $fdevolucion = $_POST["fechadevo"];
 $ci_labo = $_POST["ci_labo"];

    $insertar = "INSERT INTO toma_prestado (CI_user,ID_elemento,fecha,hora,plazo,fecha_devolucion,CI_laboratorista) VALUES ('".$cedula."', '".$id_elemento."', '".$fecha."', '".$hora."','".$plazo."', '".$fdevolucion."', '".$ci_labo."')";
    $ejecutar = mysqli_query($conectar, $insertar);

    if ($ejecutar == true) {
        echo "<script>alert('Préstamo realizado con éxito');window.location='../Controlador/prestamo.php';</script>";
    }
    else {
        echo "<script>alert('Error');window.location='../Controlador/prestamo.php';</script>";
    }
 }
 ?>

