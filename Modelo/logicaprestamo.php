<?php 
    include "../Modelo/conexion.php";
    include "../Controlador/prestamo.php";
    
 if (isset ($_POST ["aa"])){
 $cedula = $_POST["txtci"];
 $id_elemento = $_POST["idele"];
 $fecha = $_POST["fecha"];
 $hora = $_POST["hora"];
 $fprestamo = $_POST["fechapres"];
 $plazo= $_POST ["plazo"];
 $fdevolucion = $_POST["fechadevo"];

 
    $insertar = "INSERT INTO toma_prestado (CI_user,ID_elemento,fecha,hora,fecha_prestamo,plazo,fecha_devolucion) VALUES ('".$cedula."', '".$id_elemento."', '".$fecha."', '".$hora."', '".$fprestamo."','".$plazo."', '".$fdevolucion."')";
    $ejecutar = mysqli_query($conectar, $insertar);

    if ($ejecutar == true) {
        echo "<script>alert('Préstamo ingresado correctamente');window.location='../Controlador/prestamo.php';</script>";
    }
    else if ($ejecutar == false) {
        echo "<script>alert('Error');window.location='../Controlador/prestamo.php';</script>";
    }
 }
 ?>

