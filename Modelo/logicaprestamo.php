<?php 
    include "../Modelo/conexion.php";
    include "../Controlador/prestamo.php";

    
    if (isset ($_POST ["aa"])){
        $cedula = $_POST["txtci"];
        $id_elemento = $_POST["idele"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $fprestamo = $_POST["fprestamo"];
        $plazo= $_POST["plazo"];
        $fdevolucion = $_POST["fechadevo"];
        $ci_labo = $_POST["ci_labo"];
        $disponibilidad = $_POST["disponibilidad"];
       
           $insertar = "INSERT INTO toma_prestado (CI_user,ID_elemento,fecha,hora,fecha_prestamo,plazo,fecha_devolucion,CI_laboratorista) VALUES ('".$cedula."', '".$id_elemento."', '".$fecha."', '".$hora."', '".$fprestamo."','".$plazo."', '".$fdevolucion."', '".$ci_labo."')";
           $ejecutar = mysqli_query($conectar, $insertar);

           if ($ejecutar == true){
               $insertaru = "UPDATE elemento SET disponibilidad='$disponibilidad' WHERE ID = $id_elemento";
               $ejecutaru = mysqli_query($conectar, $insertaru);
           }

    
    
 }
 ?>

