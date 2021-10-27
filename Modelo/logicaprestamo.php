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


    $insertar = "INSERT INTO toma_prestado (CI_user,ID_elemento,fecha,hora,fecha_prestamo,plazo,fecha_devolucion,CI_laboratorista) VALUES ('".$cedula."', '".$id_elemento."', '".$fecha."', '".$hora."', '".$fprestamo."','".$plazo."', '".$fdevolucion."', '".$doc."')";
    $ejecutar = mysqli_query($conectar, $insertar);

    if ($resultado) {
        header('Location: ../Controlador/prestamo.php');
    }
 }
 ?>

