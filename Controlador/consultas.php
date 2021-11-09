<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/inicio.css">
    <link rel="stylesheet" href="../Vista/menuu.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Más Consultas</title>
</head>
<body>
            <header id="main-header">
            <span class="cerrar">
     <b><a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">Salir</a></b> 
        <a id="logo-header" href="#"><?php echo $_SESSION['CI_lab']?></a>
    	</span>

		<nav>
			<ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Inicio</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos Disponibles</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Historial</a></li>
			</ul>
		</nav>
	</header>
   
    <div class="container-3">
            <table class="default">
                <tr class="columnas-1">
                  <td>Cédula</td>
                  <td>ID del elemento</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Plazo</td>
                  <td>Fecha devolución</td>
                  <td>Laboratorista</td>
                </tr>
                
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT CI_user, ID_elemento, fecha, hora, plazo, fecha_devolucion, nombre from toma_prestado AS t JOIN usuario AS u ON t.CI_laboratorista = u.CI order by fecha asc";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['CI_user']?></td>
                  <td><?php echo $mostrar['ID_elemento']?></td>
                  <td><?php echo $mostrar['fecha']?></td>
                  <td><?php echo $mostrar['hora']?></td>
                  <td><?php echo $mostrar['plazo']?></td>
                  <td><?php echo $mostrar['fecha_devolucion']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                </tr>
                <?php 
                 }
                ?>
                </table>
      </div>   

   <script type="text/javascript">
        function ConfirmarSalida ()
        {
           var respuesta = confirm ("¿Está seguro de cerrar sesión?");
           if (respuesta == true) 
           {
               return true;
           }
           else
           {
               return false;
           }
        }
</script>
</body>
</html>