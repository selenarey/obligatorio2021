<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/estiloele.css">
    <link rel="stylesheet" href="../Vista/menu.css">
    <link rel="stylesheet" href="../ejemplo2.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Elementos</title>
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
        <div class="container-4">
        <h1>Agregar elemento</h1>
        <form action="../Controlador/elementos.php" method="post">
            <br>
            <input type="text" name="id" class="id" id="id" maxlength="5" placeholder="ID del elemento" required>
            <br>
            <br>
            <select name="tipo" class="tipo" id="tipo">
            <option>Tipo</option>
            <option value="Mouse">Mouse</option>
            <option value="Monitor">Monitor</option>
            <option value="Teclado">Teclado</option>
            <option value="Cargador">Cargador</option>
            </select>
            <br>
            <br>
            <select name="estado" class="estado" id="estado">
            <option value="--">Estado</option>
            <option value="Excelente">Excelente</option>
            <option value="Bien">Bien</option>
            <option value="Dañado">Dañado</option>
            <option value="En Reparación">En Reparación</option>
            </select>
            <br>
            <br>
            <input type="text" name="desc" class="desc" id="desc" maxlength="40" placeholder="Descripción del estado">
            <br>
            <br>
            <input type="text" name="cant" class="cant" id="cant" maxlength="5" placeholder="Cantidad">
            <br>
            <br>
            <button input type="submit" value="Agregar" name="aa-3" id="aa-3"> Agregar </button>
        </form>
        </div>
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>ID</td>
                  <td>Tipo</td>
                  <td>Estado</td>
                  <td>Descripción</td>
                  <td>Cantidad</td>
                  <td>
                    <form method="post" action="../Modelo/eliminarele.php">
                      <?php 
                       ?>
                      <input type="submit" value="Eliminar todo" onclick="return ConfirmDelete()" class="eliminar2">
                    </form>
                  </td>
                  <td></td>
                </tr>

                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from elemento";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['ID']?></td>
                  <td><?php echo $mostrar['tipo']?></td>
                  <td><?php echo $mostrar['estado']?></td>
                  <td><?php echo $mostrar['descripcion_estado']?></td>
                  <td><?php echo $mostrar['cantidad']?></td>
                  <td>
                      <?php 
                       ?>
            <a href="#" class="editar">Editar</a>
    
                  </td>
                  <td>
                      <a href="../Modelo/eliminarElemen.php?id=<?php echo $mostrar['ID'] ?>" class="eliminar">Eliminar </a>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>
              <?php 
            if (isset ($_POST["aa-3"])){
                $id = $_POST ["id"];
                $tipo = $_POST ["tipo"];
                $estado = $_POST ["estado"];
                $desc = $_POST ["desc"];
                $cant = $_POST ["cant"];

                $insertar = "INSERT INTO elemento (ID, tipo, estado, descripcion_estado, cantidad) VALUES (' $id','$tipo','$estado','$desc', '$cant')";
                $ejecutar = mysqli_query($conectar, $insertar);

                if ($ejecutar == true) {
                    echo "<script>alert('Elemento ingresado correctamente');window.location='../Controlador/elementos.php';</script>";
                }
                else if ($ejecutar == false) {
                    echo "<script>alert('Error');window.location='../Controlador/elementos.php';</script>";
                }
            }
        ?>
        </div>
      
<script type="text/javascript">
        function ConfirmDelete ()
        {
           var respuesta = confirm ("¿Estás seguro de eliminar todos los registros?");
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
