<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vista/menu.css">
    <link rel="stylesheet" href="../Vista/adminVent.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Administador</title>
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
    <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Cédula</td>
                  <td>Contraseña</td>
                  <td>
                    <form method="post" action="../Modelo/eliminarLabo.php">
                      <?php 
                       ?>
                      <input type="submit" value="Eliminar todo" onclick="return ConfirmDelete()" class="eliminar2">
                    </form>
                  </td>
                  <td></td>
                </tr>

                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from laboratorista";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['CI_lab']?></td>
                  <td><?php echo $mostrar['contraseña']?></td>
                  <td>
                  <a href="../Controlador/editarLabo.php?ci=<?php echo $mostrar['CI_lab']?> & contraseña=<?php echo $mostrar['contraseña']?>"class="editar">Editar</a>
                  </td>
                  <td>
                  <a href="../Modelo/eliminarLabora.php?ci=<?php echo $mostrar['CI_lab'] ?>" class="eliminar" onclick="return ConfirmarDelete()">Eliminar </a>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>
              <input type="text" name="documento" class="documento" id="documento" placeholder="Cédula de identidad" maxlength="8" required>
              <br>
              <br>
              <input type="password" name="contra" class="contra" id="contra" placeholder="Contraseña" maxlength="20" required>
              <br>
              <br>
              <input type="submit" value="Agregar" name="aa-5" id="aa-5"></input>
        </div>
        <?php 
            if (isset ($_POST["aa-5"])){
                $ci_lab = $_POST ["documento"];
                $contraseña = $_POST ["contra"];

                $insertar = "INSERT INTO laboratorista (CI_lab, contraseña) VALUES (' $ci_lab', '$contraseña')";
                $ejecutar = mysqli_query($conectar, $insertar);
                

                if ($ejecutar == true) {
                    echo "<script>alert('Usuario ingresado correctamente');window.location='../Controlador/ventanaAdmin.php';</script>";
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
</body>
</html>