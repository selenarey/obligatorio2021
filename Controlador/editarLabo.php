<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link rel="stylesheet" href="../Vista/menu.css">
    <link rel="stylesheet" href="../Vista/adminEditar.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Editar Laboratorista</title>
</head>
<body>
            <header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name"><?php echo $_SESSION ['CI_lab']?></span>
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
        
        <form action="../Modelo/actualizarLabo.php" method="post">
        <?php 
        require ("../Modelo/conexion.php");

        $ci= $_GET['ci'];
        $contraseña= $_GET['contraseña'];
        ?>
            <br>
            <h5>Cédula</h5>
            <input type="text" readonly="readonly" name="ci" class="ci" id="ci" maxlength="8" value="<?=$ci?>">
            <br>
            <br>
            <h5>Contraseña</h5>
            <input type="text" name="contraseña" class="contraseña" id="contraseña" maxlength="20" value="<?=$contraseña?>">
            <br>
            <br>
            <input type="submit" name="aa-3" id="aa-3" value="Actualizar"></input>
            </form>
            <br>
            <form action="../Controlador/ventanaAdmin.php">
            <input type="submit" name="aa-4" id="aa-4" value="Volver"></input>
            </form>
            </div>
    </section>
</body>
</html>