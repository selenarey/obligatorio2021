<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="stylesheet" href="../Vista/actUsuarios.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Usuarios</title>
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
	<section id="main-content">

        <div class="container-5">
        <h1>Editar Usuario</h1>
        
        <form action="../Modelo/actualizarUsuarios.php" method="post">
        <?php 
        require ("../Modelo/conexion.php");

        $ci= $_GET['ci'];
        $nombre= $_GET['nombre'];
        $apellido= $_GET['apellido'];
        $grupo= $_GET['grupo'];
        $telefono= $_GET['telefono'];
        ?>
            <br>
            <h5>Cédula</h5>
            <input type="text" readonly="readonly" name="txtci" class="cedula" id="cedula" maxlength="8" value="<?=$ci?>">
            <br>
            <br>
            <h5>Nombre</h5>
            <input type="text" name="txtnombre" class="nombre" id="nombre" maxlength="20" value="<?=$nombre?>">
            <br>
            <br>
            <h5>Apellido</h5>
            <input type="text" name="txtape" class="apellido" id="apellido" maxlength="20" value="<?=$apellido?>">
            <br>
            <br>
            <h5>Grupo</h5>
            <input type="text" name="txtgrupo" class="grupo" id="grupo" maxlength="5" value="<?=$grupo?>">
            <br>
            <br>
            <h5>Teléfono</h5>
            <input type="text" name="telefono" class="telefono" id="telefono" maxlength="9" value="<?=$telefono?>">
            <br>
            <br>
            <input type="submit" name="aa-3" id="aa-3" value="Actualizar"></input>
            </form>
            <br>
            <form action="../Controlador/usuarios.php">
            <input type="submit" name="aa-4" id="aa-4" value="Volver"></input>
            </form>
            </div>
    </section>
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