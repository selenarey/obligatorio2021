<?php 
    include "../Modelo/conexion.php";
    require ("../Controlador/usuarios.php");
    
 if (isset ($_POST ["aa"])){
 $cedula = $_POST["txtci"];
 $elemento = $_POST["txtele"];
 $fecha = $_POST["fecha"];
 $hora = $_POST["hora"];
 $fprestamo = $_POST["fechapres"];
 $plazo= $_POST ["plazo"];
 $fdevolucion = $_POST["fechadevo"];
 
    $insertar = "INSERT INTO prestamos (ci_usuario,elemento,fecha,hora,fecha_prestamo,plazo,fecha_devolucion) VALUES ('".$cedula."', '".$elemento."', '".$fecha."', '".$hora."', '".$fprestamo."','".$plazo."', '".$fdevolucion."')";
    $ejecutar = mysqli_query($conectar, $insertar);

    if ($ejecutar == true) {
        echo "<script>alert('Préstamo ingresado correctamente');window.location='../Controlador/prestamos.html';</script>";
    }
    else if ($ejecutar == false) {
        echo "<script>alert('error');window.location='../Controlador/prestamos.html';</script>";
    }
 }
 ?>

 