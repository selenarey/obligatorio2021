<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/consulta.css">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Más Consultas</title>
</head>
<body>
            <header id="main-header">
		
        <a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">
			<span class="cerrar">Cerrar Sesión</span>
		</a> 

		<nav>
			<ul>
            <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Más Consultas</a></li>
			</ul>
		</nav>
	</header>
   
    <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Cédula</td>
                  <td>ID del elemento</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Fecha préstamo</td>
                  <td>Plazo</td>
                  <td>Fecha devolución</td>
                  <td>Laboratorista</td>
                </tr>
                
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from toma_prestado";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['CI_user']?></td>
                  <td><?php echo $mostrar['ID_elemento']?></td>
                  <td><?php echo $mostrar['fecha']?></td>
                  <td><?php echo $mostrar['hora']?></td>
                  <td><?php echo $mostrar['fecha_prestamo']?></td>
                  <td><?php echo $mostrar['plazo']?></td>
                  <td><?php echo $mostrar['fecha_devolucion']?></td>
                  <td><?php echo $mostrar['CI_laboratorista']?></td>
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