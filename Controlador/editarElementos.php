<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="stylesheet" href="../Vista/actElementos.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
</head>
<body>
            <header id="main-header">
		
        <a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">
			<span class="cerrar">Cerrar Sesión</span>
		</a> 

	</header>
	<section id="main-content">

        <div class="container-5">
        <h1>Editar Elemento</h1>
        
        <form action="../Modelo/actualizarElementos.php" method="post">
        <?php 
        require ("../Modelo/conexion.php");

        $id= $_GET['id'];
        $tipo= $_GET['tipo'];
        $estado= $_GET['estado'];
        $desc= $_GET['descripcion_estado'];
        ?>
            <br>
            <h5>ID</h5>
            <input type="text" readonly="readonly" name="id" class="id" id="id" maxlength="5" value="<?=$id?>">
            <br>
            <br>
            <h5>Tipo de elemento</h5>
            <input type="text" name="tipo" class="tipo" id="tipo" value="<?=$tipo?>">
            <br>
            <br>
            <h5>Estado</h5>
            <input type="text" name="estado" class="estado" id="estado" value="<?=$estado?>">
            <br>
            <br>
            <h5>Descripción del estado</h5>
            <input type="text" name="desc" class="desc" id="desc" maxlength="40" value="<?=$desc?>">
            <br>
            <br>
            <input type="submit" name="aa-3" id="aa-3" value="Actualizar"></input>
            </form>
            <br>
            <form action="../Controlador/elementos.php">
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