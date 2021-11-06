<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/consultas.css">
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
    <form action="" method="get">
        <input type="text" name="busqueda" required> <br>
        <input type="submit" name="enviar" value="Buscar">
    </form>
    <br><br><br>

    <?php 
    include ("../Modelo/conexion.php");
    if(isset($_GET['enviar'])){
        $busqueda= $_GET['busqueda'];

        $sql= $conectar->query("SELECT * FROM toma_prestado WHERE ID_elemento LIKE '%$busqueda%'");
        
        while ($row= $sql->fetch_array()){

            ?> 
           <?php  echo $row['CI_user'];?>
           <br>
           <?php  echo $row['ID_elemento'];?>
           <br>
           <?php  echo $row['fecha'];?>
           <br>
           <?php  echo $row['hora'];?>
           <br>
           <?php  echo $row['fecha_prestamo'];?>
           <br>
           <?php  echo $row['plazo'];?>
           <br>
           <?php  echo $row['fecha_devolucion'];?>
           <br>
           <?php  echo $row['CI_laboratorista'];?>
        
    <?php 
    }
    } 
    ?>
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