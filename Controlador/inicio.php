<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/iniciopre.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Préstamos</title>
</head>
<body>
<nav>
    <div class="logo">
        <p><?php echo $_SESSION ['documento']?></p>
    </div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
            </ul>
        </nav> 
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Cédula del usuario</td>
                  <td>ID del elemento</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Fecha del préstamo</td>
                  <td>Plazo</td>
                  <td>Fecha de devolución</td> 
                  <td>
                    <form method="post" action="../Modelo/eliminarpres.php">
                      <?php 
                       ?>
                      <input type="submit" value="Eliminar todo" class="eliminar2">
                    </form>
                  </td>
                  <td></td>
                </tr>
                
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT * from prestamos";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['ci_usuario']?></td>
                  <td><?php echo $mostrar['id_elemento']?></td>
                  <td><?php echo $mostrar['fecha']?></td>
                  <td><?php echo $mostrar['hora']?></td>
                  <td><?php echo $mostrar['fecha_prestamo']?></td>
                  <td><?php echo $mostrar['plazo']?></td>
                  <td><?php echo $mostrar['fecha_devolucion']?></td>
                  <td>
                    <form method="post" action="../Modelo/eliminarpres.php" method="POST">
                      <input type="submit" value="Editar" class="editar">
                    </form>
                  </td>
                  <td>
                      <input type="submit" value="Eliminar" class="eliminar">
                    </form>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>        
      </div>   
</body>
</html>