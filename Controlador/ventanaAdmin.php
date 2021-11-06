<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vista/menuuu.css">
    <link rel="stylesheet" href="../Vista/adminVentan.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Administador</title>
</head>
<body>
            <header id="main-header">
		
            <a id="logo-header" href="../Modelo/cerrarsesion.php" onclick="return ConfirmarSalida()">
			<span class="cerrar">Cerrar Sesión</span>
		</a> 

		<nav>
			<ul>
            <li><a href="../Controlador/ventanaAdmin.php" class="inicio">Nuevo Laboratorista</a></li>
			</ul>
		</nav>
	</header>

	<section id="main-content">
    <div class="container-3">
            <table class="default">
            <tr class="columnas">
                  <td>Cédula</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Teléfono</td>
                  <td>
                  </td>
                </tr>
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from usuario";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['CI']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                  <td><?php echo $mostrar['apellido']?></td>
                  <td><?php echo $mostrar['telefono']?></td> 
                  <td>
                  <a href="../Modelo/eliminarLabora.php?ci=<?php echo $mostrar['CI'] ?>" class="eliminar" onclick="return ConfirmarDelete()">Eliminar </a>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>
            </div>
            <div class="agr">
            <h1>Nuevo Laboratorista</h1>
            <form action="../Controlador/ventanaAdmin.php" method="post">
            <br>
            <br>
            <input type="text" name="txtci" class="cedula" id="cedula" maxlength="8" placeholder="Cédula" required>
            <br>
            <br>
            <input type="text" name="txtnombre" class="nombre" id="nombre" maxlength="20" placeholder="Nombre" required>
            <br>
            <br>
            <input type="text" name="txtape" class="apellido" id="apellido" maxlength="20" placeholder="Apellido" required>
            <br>
            <br>
            <input type="hidden" name="txtgrupo" class="grupo" id="grupo" maxlength="5" placeholder="Grupo">
            <input type="text" name="telefono" class="telefono" id="telefono" maxlength="9" placeholder="Teléfono" required>
            <br>
            <br>
            <br>
              <input type="submit" value="Agregar" name="aa-5" id="aa-5"></input>
              </div>
        <?php 
            if (isset ($_POST["aa-5"])){
                $ci_usuario = $_POST ["txtci"];
                $nombre = $_POST ["txtnombre"];
                $apellido = $_POST ["txtape"];
                $grupo = $_POST ["txtgrupo"];
                $telefono = $_POST ["telefono"];

                $insertar = "INSERT INTO usuario (CI, nombre, apellido, grupo, telefono) VALUES (' $ci_usuario', '$nombre', '$apellido', '$grupo', '$telefono')";
                $ejecutar = mysqli_query($conectar, $insertar);
                

                if ($ejecutar == true) {
                    header('Location: ../Controlador/ventanaAdmin.php');
                }
                else if ($ejecutar == false) {
                    echo "<script>alert('Error');window.location='../Controlador/ventanaAdmin.php';</script>";
                }
            }
        ?>

<script type="text/javascript">
        function ConfirmDelete()
        {
           var respuesta = confirm ("¿Está seguro de que quiere eliminar todos los registros?");
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
<script type="text/javascript">
        function ConfirmarDelete ()
        {
           var respuesta = confirm ("¿Está seguro de que quiere eliminar este registro?");
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