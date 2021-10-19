<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Vista/iniciopres.css">
    <link rel="shortcut icon" href="../Vista/img/lowerlogo.png">
    <title>Préstamos</title>
</head>
<body>
<nav>
    <div class="logo">
        <p><?php echo $_SESSION ['CI_lab']?></p>
    </div>
            <ul>
                <li><a href="../Controlador/inicio.php" class="inicio">Préstamos</a></li>
                <li><a href="../Controlador/usuarios.php" class="usuarios">Usuarios</a></li>
                <li><a href="../Controlador/prestamo.php" class="prestamos">Nuevo Préstamo</a></li>
                <li><a href="../Controlador/elementos.php" class="elementos">Elementos</a></li>
                <li><a href="../Controlador/consultas.php" class="consultas">Más Consultas</a></li>
            </ul>
        </nav> 
        <div class="container-3">
            <table class="default">
                <tr class="columnas">
                  <td>Cédula</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Grupo</td>
                  <td>ID</td>
                  <td>Elemento</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Plazo</td>
                  <td>
                    <form method="post" action="../Modelo/eliminarpres.php">
                      <?php 
                       ?>
                      <input type="submit" value="Devolver todo" onclick="return ConfirmDelete()" class="eliminar2">
                    </form>
                  </td>
                </tr>
                
                <?php  
                    require("../Modelo/conexion.php");
                    $sql = "SELECT CI_user, nombre, apellido, grupo, ID_elemento, tipo, fecha, hora, fecha_prestamo, plazo from usuario AS u JOIN toma_prestado AS t ON u.CI = t.CI_user JOIN elemento AS e ON e.ID = t.ID_elemento";
                    $result = mysqli_query($conectar, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>

                <tr class="columnas-2"> 
                  <td><?php echo $mostrar['CI_user']?></td>
                  <td><?php echo $mostrar['nombre']?></td>
                  <td><?php echo $mostrar['apellido']?></td>
                  <td><?php echo $mostrar['grupo']?></td>
                  <td><?php echo $mostrar['ID_elemento']?></td>
                  <td><?php echo $mostrar['tipo']?></td>
                  <td><?php echo $mostrar['fecha']?></td>
                  <td><?php echo $mostrar['hora']?></td>
                  <td><?php echo $mostrar['plazo']?></td>
                  <td>
                    <form method="post" action="../Modelo/eliminarpres.php" method="POST">
                      <input type="submit" value="Devolver" class="editar">
                    </form>
                  </td>
                </tr>
                <?php 
                 }
                ?>
              </table>        
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