<?php 
 $bdhost = "localhost";
 $bdusuario = "root";
 $bdpass = "";
 $bdnombre = "obligatorio";
 $conectar = mysqli_connect($bdhost, $bdusuario, $bdpass, $bdnombre);
 if (!$conectar)
 {   
     die("No hay conexión: ".mysqli_connect_error());
 }
 $doc = $_POST["txtdoc"];
 $pass = $_POST["txtpass"];
 $query = mysqli_query($conectar,"SELECT * FROM laboratorista WHERE documento = '".$doc."' and password = '".$pass."'");
 $fila = mysqli_num_rows($query);
 if($fila == 1)
 {
     echo "Bienvenido $doc a ";
 }
 else if ($fila == 0)
 {
     echo "<script> alert('Error');window.location='login.html'</script>";
 }        
?>